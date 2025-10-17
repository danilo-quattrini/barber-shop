<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(): View
    {
        $appointments = Appointment::with('user')
        ->latest('appointment_date')
        ->paginate('3');
        return view('appointment.index', [
            'appointments' => $appointments
        ]);
    }

    public function show(Appointment $appointment): View
    {
        return view('appointment.show', [
            'appointment' => $appointment
        ]);
    }
}
