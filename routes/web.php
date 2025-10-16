<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::get('sign-up', [UserController::class, 'index']);

Route::patch('sing-up', [UserController::class, 'create']);

Route::get('appointments',[AppointmentController::class, 'index']);
