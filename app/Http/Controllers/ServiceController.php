<?php

namespace App\Http\Controllers;

use App\Models\Service;
use \Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }
}
