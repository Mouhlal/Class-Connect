<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('layouts.home');
    }
    public function faq(){
        return view('layouts.faq');
    }
}
