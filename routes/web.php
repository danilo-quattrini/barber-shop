<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PasswordResetLink;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SignUpController;
use App\Jobs\AppointmentJob;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/about-us', 'about');

Route::get('/test-queue', function (){
    $appointment = Appointment::first();
    AppointmentJob::dispatch($appointment);
    return 'Hello New';
});

Route::controller(ServiceController::class)->group(function (){
    Route::get('/services', 'index');
});

// Login Session and Recovery Password
Route::controller(SessionController::class)->group(function (){
    Route::get('/login', 'index');
    Route::middleware('throttle:sing-in')
        ->post('/login', 'store')
        ->name('login');
    Route::post('/log-out', 'destroy');
 });

Route::controller(PasswordResetLink::class)->group(function (){
    Route::get('/login/recovery', 'store')
        ->name('login.recovery');
});

Route::controller(SignUpController::class)->group(function (){
    Route::get('sign-up', 'index')
    ->name('sign-up');
    Route::post('sing-up','create');
});

Route::middleware('auth')->controller(AppointmentController::class)->group(function (){
    Route::get('/appointments', 'index');
    Route::get('/appointments/create','create');
    Route::post('appointments','store');
    Route::get('/appointments/{appointment}','show')
        ->can('see', 'appointment');
    Route::get('/appointments/{appointment}/edit', 'edit')
        ->can('edit', 'appointment');
    Route::patch('/appointments/{appointment}/edit', 'update')
        ->can('edit', 'appointment');;
    Route::delete('/appointments/{appointment}', 'destroy');
});
