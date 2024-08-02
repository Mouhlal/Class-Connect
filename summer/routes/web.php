<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::controller(ClientController::class)->group(function(){
    Route::get('/','home')->name('layouts.home');
});
