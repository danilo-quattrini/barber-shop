<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required']
        ]);

        // attempt to log in
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'The information you gave us are wrong'
            ]);
        }

        // Rigenerate session key for each session to avoid Session Hijacking
        $request->session()->regenerate();

        return redirect('/');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
