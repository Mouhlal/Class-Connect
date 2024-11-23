<?php

use App\Http\Controllers\AffectationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(ClientController::class)->group(function(){
    Route::get('/','home')->name('layouts.home');
    Route::get('/FAQ','faq')->name('layouts.faq');
    Route::get('/contact','contact')->name('layouts.contact')->middleware('Directeur');
    Route::get('/table','table')->name('dashboard.table');
    Route::get('/dasboard','layouts.dashboard')->name('layouts.dash');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/login','loginForm')->name('auth.Formlogin')->middleware('guest');
    Route::post('/login','login')->name('login')->middleware('guest');
    Route::get('/logout','logout')->name('auth.logout')->middleware('auth');
    Route::get('/register','register')->name('auth.register')->middleware('guest');
    Route::post('/store','store')->name('auth.store')->middleware('guest');
    Route::get('/profs', 'index')->name('profs.profs')->middleware('Directeur');
    Route::get('/profs/{id}','profile')->name('profs.profile')->middleware('auth');
});

Route::controller(ModulesController::class)->group(function(){
    Route::get('/modules','index')->name('modules.modules');
    Route::get('/modules/{id}','modify')->name('modules.modify');
    Route::put('/modules/edit/{id}','edit')->name('modules.edit');
    Route::get('/show','show')->name('modules.show');
    Route::post('/modules/create','create')->name('modules.store');
});

Route::controller(EtudiantsController::class)->group(function(){
    Route::get('/etudiants','index')->name('etudiants.etudiants')->middleware('auth');
    Route::get('/etudiants/create','create')->name('etudiants.create')->middleware('Directeur');
    Route::post('/etudiants/store','store')->name('etudiants.store')->middleware('Directeur');
    Route::get('/etudiants/edit/{id}','edit')->name('etudiants.edit')->middleware('Directeur');
    Route::put('/etudiants/update/{id}','update')->name('etudiants.update')->middleware('Directeur');
    Route::get('/etudiants/{id}','show')->name('etudiants.show')->middleware('Directeur');
    Route::delete('/etudiants/delete/{id}','delete')->name('etudiants.delete')->middleware('Directeur');
});

Route::controller(AffectationController::class)->group(function(){
    Route::get('/affectation','show')->name('affectations.show')->middleware('Directeur');
    Route::post('/affectations/créer','index')->name('affectations.index')->middleware('Directeur');
});
