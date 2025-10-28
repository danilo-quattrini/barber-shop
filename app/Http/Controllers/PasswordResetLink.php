<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordResetLink extends Controller
{
    public function store()
    {
        return view('auth.reset');
    }
}
