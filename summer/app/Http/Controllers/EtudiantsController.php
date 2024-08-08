<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use App\Models\NvScolaire;
use Illuminate\Http\Request;

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
}
