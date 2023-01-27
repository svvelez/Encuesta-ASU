<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsuController;



Route::get('/', function () {
    return view('asu/encuesta');
});




   
    Route::group(['prefix' => 'encuesta'],function(){
        
        
    Route::get('encuesta',[AsuController::class, 'encuesta']);
    Route::resource('formulario',AsuController::class);
        
   
    
    
    });