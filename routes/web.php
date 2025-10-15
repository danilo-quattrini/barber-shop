<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('sign-up', function (){
    return view('sign-up');
});

Route::get('appointments', function (){
    return view('appointment.index');
});
