<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(ClientController::class)->group(function(){
    Route::get('/','home')->name('layouts.home');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/login','loginForm')->name('auth.Formlogin');
    Route::post('/login','login')->name('auth.login');
    Route::get('/logout','logout')->name('auth.logout');
    Route::get('/register','register')->name('auth.register');
});
