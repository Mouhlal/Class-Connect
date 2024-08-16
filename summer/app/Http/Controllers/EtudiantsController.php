<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use App\Models\NvScolaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EtudiantsController extends Controller
{
    public function index(Request $request){
        $nv_scolaires_id = $request->input('nv_scolaires_id');
        $nv_scolaires = NvScolaire::all();

        if ($nv_scolaires_id){
            $etudiants = Etudiants::where('nv_scolaires_id',$nv_scolaires_id)->with('nv_scolaires')->get();
        } else{
            $etudiants = Etudiants::with('nv_scolaires')->get();
        }

        return view('etudiants.etudiants',[
            'nv_scolaires_id' => $nv_scolaires_id,
            'nv_scolaires' => $nv_scolaires,
            'etudiants' => $etudiants
        ]);
    }

    public function create(){
        $groupe = NvScolaire::all();
        return view('etudiants.create',[
            'groupe' => $groupe
            ]);
    }

    public function store(Request $request){
        $form = $request->validate([
            'nomEt' => 'required',
            'prenomEt' => 'required',
            'image' => 'required|image',
            'email' => 'required|unique:etudiants',
            'password' => 'required|confirmed',
            'nv_scolaires_id' => 'required|exists:nv_scolaires,id'
        ]);
        $form['image'] = $request->file('image')->store('etudiants','public');
        $form['password'] = Hash::make($request->password);
        Etudiants::create($form);
        return redirect()->route('etudiants.etudiants')->with('done','Ajoutation avec succées');
    }

    public function edit($id){
        $etudiants = Etudiants::findOrFail($id);
        $groupe = NvScolaire::all();
        return view('etudiants.edit',[
            'groupe' => $groupe,
            'etudiants' => $etudiants
            ]);
    }
    public function update(Request $request , $id){
        $form = $request->validate([
            'nomEt' => 'nullable',
            'prenomEt' => 'nullable',
            'image' => 'nullable|image',
            'email' => 'nullable|unique:etudiants,email,'.$id,
            'password' => 'nullable',
            'nv_scolaires_id' => 'nullable|exists:nv_scolaires,id'
        ]);

        if($request->hasFile('image')){
            $form['image'] = $request->file('image')->store('etudiants','public');
        }
        if($request->password){
            $form['password'] = Hash::make($request->password);
        };
        Etudiants::findOrFail($id)->update($form);
        return redirect()->route('etudiants.etudiants')->with('edit','Modification avec succes');

    }
}
