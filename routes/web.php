<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('appointments', function (){
    return view('appointment.index');
});
