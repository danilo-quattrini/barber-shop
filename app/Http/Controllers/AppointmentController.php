<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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

    public function edit(Appointment $appointment): View
    {
        return view('appointment.edit', ['appointment' => $appointment]);
    }

    public function update(Appointment $appointment, Request $request): View
    {
        $validated_appointment = $request->validate([
            'title' => 'min:5|max:20',
            'body' => 'min:10|max:200',
            'appointment_date' => ['required', Rule::date()->after(today())]
        ]);

        $appointment->update($validated_appointment);

        return view('appointment.show', ['appointment' => $appointment]);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect('/appointments');
    }
}
