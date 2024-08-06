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

}
