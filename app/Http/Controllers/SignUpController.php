<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class SignUpController extends Controller
{
    public function index(): View
    {
        return view('auth.sign-up');
    }
    public function create(Request $request)
    {
            //TODO: authentication part to check if the user it's in the db or not

            // validation
            $validated = $request->validate([
                'first_name' => ['required', 'string', 'min:2', 'max:50'],
                'last_name' => ['required', 'string', 'min:2', 'max:50'],
                'phone' => ['required', 'string', 'regex:/^[0-9+\-\s()]{7,20}$/', 'unique:users,phone'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
                'password' => [
                    'required',
                    'confirmed',
                    Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(), // Checks password breaches
                ],
                'role' => ['required', 'in:user,admin,barber'], // adapt to your app roles
            ]);

            // add the user inside the db
           $authenticated_user =  User::create($validated);

           // authenticate the user inside the system
            Auth::login($authenticated_user);

            return redirect('/');
    }
}
