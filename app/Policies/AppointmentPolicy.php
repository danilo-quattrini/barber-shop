<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AppointmentPolicy
{
    public function see(User $user, Appointment $appointment): bool
    {
        return $appointment->user->is($user);
    }

    public function edit(User $user, Appointment $appointment): bool
    {
        return $appointment->user->is($user);
    }
}
