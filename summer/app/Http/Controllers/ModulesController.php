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
        return view('profs.modules',[
            'modules' => $modules,
        ]);
    }

    public function show(){
        return view('profs.addmodule');
    }
    public function create(Request $request){
        $form = $request->validate([
            'nomMod' => 'required',
            'coef' => 'required',
            'horaires' => 'required'
        ]);
        Modules::create($form);
        return redirect()->route('profs.modules');
    }

}
