<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsuController;



Route::get('/', function () {
    return view('asu/encuesta');
});


  
Route::resource('encuesta',AsuController::class);


