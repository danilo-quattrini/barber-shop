<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::controller(SessionController::class)->group(function (){
    Route::post('/log-out', 'destroy');
});
Route::controller(SignUpController::class)->group(function (){
    Route::get('sign-up', 'index');
    Route::post('sing-up','create');
});

Route::controller(AppointmentController::class)->group(function (){
    Route::get('appointments', 'index');
    Route::get('appointments/{appointment}','show');
    Route::get('/appointments/{appointment}/edit', 'edit');
    Route::patch('/appointments/{appointment}/edit', 'update');
    Route::delete('/appointments/{appointment}', 'destroy');
});
