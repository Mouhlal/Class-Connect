<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Modules;
use App\Models\User;
use Illuminate\Http\Request;

class ModulesController extends Controller
{

    public function index(){
        $modules = Modules::with('affectations')->get();
        return view('modules.modules',[
            'modules' => $modules,
        ]);
    }

    public function show(){
        return view('modules.show');
    }
    public function create(Request $request){
        $form = $request->validate([
            'nomMod' => 'required',
            'coef' => 'required',
            'horaires' => 'required'
        ]);
        Modules::create($form);
        return redirect()->route('modules.modules');
    }

    public function modify($id){
        $modules = Modules::findOrFail($id) ;
        return view('modules.modify',compact('modules'));
    }
    public function edit(Request $request ,$id){
        $form = $request->validate([
            'nomMod' => 'nullable' ,
            'coef' => 'nullable' ,
            'horaires' => 'nullable'
        ]);
        $modules = Modules::findOrFail($id) ;
        $modules->update($form);
        return redirect()->route('modules.modules')->with('addmodule','Ajoutation avec succes');
    }
    public function delete($id){
        $mod = Modules::findOrFail($id) ;
        $mod->delete();
        return redirect()->route('modules.modules')->with('dropmodule','Suppression avec succes');
    }
}
