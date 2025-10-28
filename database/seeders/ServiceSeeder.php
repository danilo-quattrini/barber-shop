<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Haircut',
            'description' => 'Tailored haircut with optional hot lather and straight razor neck shave',
            'price' => 40
        ]);

        Service::create( [
            'name' => 'Beard Trim',
            'description' => 'Faded haircut from the skin of the scalp to desired length on top with hot lather and neck shave.',
            'price' => 22
        ]);
        Service::create( [
            'name' => 'Skin Fade',
            'description' => 'Beard trim with scissor or clipper to shape and line up beard.',
            'price' => 40
        ]);
        Service::create( [
            'name' => 'Long Cut',
            'description' => 'Haircut starting below the base of the neck or chin, whether it is staying long or is being cut to a shorter length, and any transformational haircut',
            'price' => 55
        ]);
    }
}
