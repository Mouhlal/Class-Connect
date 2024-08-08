<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(ClientController::class)->group(function(){
    Route::get('/','home')->name('layouts.home');
    Route::get('/FAQ','faq')->name('layouts.faq');
    Route::get('/contact','contact')->name('layouts.contact');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/login','loginForm')->name('auth.Formlogin');
    Route::post('/login','login')->name('auth.login');
    Route::get('/logout','logout')->name('auth.logout');
    Route::get('/register','register')->name('auth.register');
    Route::post('/store','store')->name('auth.store');
    Route::get('/profs','index')->name('profs.profs');
    Route::get('/profs/{id}','profile')->name('profs.profile');
});

Route::get('/modules',[ModulesController::class,'index'])->name('profs.modules');
Route::get('/etudiants',[EtudiantsController::class,'index'])->name('etudiants.etudiants');
