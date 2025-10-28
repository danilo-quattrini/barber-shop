<?php

namespace App\Jobs;

use App\Models\Appointment;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class AppointmentJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Appointment $appointment)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Try for the first time the queue know with this appointment' . $this->appointment);
    }
}
