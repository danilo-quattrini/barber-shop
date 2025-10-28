<?php

namespace App\Http\Controllers;


use App\Mail\NewsLetter;
use App\Models\Appointment;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(): View
    {
        $appointments = Appointment::with('user', 'service')
            ->where('appointments.user_id', '=', Auth::id())
            ->latest()
            ->simplePaginate('3');
        return view('appointment.index', compact('appointments'));
    }

    public function create(): View
    {
        $services = Service::pluck('name', 'id');
        return view('appointment.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'appointment_date' => ['date', 'after_or_equal:today'],
        ]);

        $appointment = Appointment::create([
            'notes' => 'random string note',
            'appointment_date' => $request->get('appointment_date'),
            'appointment_time' => 60,
            'status' => 'pending',
            'user_id' => Auth::id(),
            'service_id' => $request->get('services')
        ]);
        $user = Auth::user();

        Mail::to(Auth::user()->email)->send(new NewsLetter($appointment, $user));

        return redirect('/appointments');
    }
    public function show(Appointment $appointment): View
    {
        return view('appointment.show', [
            'appointment' => $appointment
        ]);
    }

    public function edit(Appointment $appointment): View
    {
        return view('appointment.edit', compact('appointment'));
    }

    public function update(Appointment $appointment, Request $request): View
    {
        $validated_appointment = $request->validate([
            'appointment_date' => ['date', 'after_or_equal:today'],
            'appointment_time' => ['required', 'string'],
            'status' => ['required', Rule::in(['pending', 'confirmed', 'cancelled'])],
            'notes' => ['nullable', 'string', 'max:255']
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
