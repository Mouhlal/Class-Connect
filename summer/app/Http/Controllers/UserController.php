<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $form = $request->validate([
            'name' => 'required',
            'image' => 'image|required',
            'cin' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        $form['password'] = Hash::make($request->password);
        $form['image'] = $request->file('image')->store('users','public');
        User::create($form);
        return redirect()->route('auth.login')->with('succes','Le compte a bien crée');
    }

    public function loginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $credentials = [
            'email' => $email ,
            'password' => $password
        ];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('layouts.home')->with('login','Authentification avec succées');
        }
        else{
            return back()->withErrors([
                'email' => "Email or password incorrect"
            ]);
        }
    }

    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        return redirect()->route('layouts.home')->with('logout','Deconnexion avec succées');
    }

    public function index(){
        $profs = User::with('affectations')->get();
        return view('profs.profs',[
            'profs' => $profs
        ]);
    }
    public function profile($id)
    {
        $profile = User::with('affectations')->findOrFail($id);
        return view('profs.profile', [
            'profile' => $profile
        ]);
    }

}
