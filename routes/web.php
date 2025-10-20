<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('sign-up', [UserController::class, 'index']);

Route::patch('sing-up', [UserController::class, 'create']);

Route::controller(AppointmentController::class)->group(function (){
    Route::get('appointments', 'index');
    Route::get('appointments/{appointment}','show');
    Route::get('/appointments/{appointment}/edit', 'edit');
    Route::patch('/appointments/{appointment}/edit', 'update');
    Route::delete('/appointments/{appointment}', 'destroy');
});
