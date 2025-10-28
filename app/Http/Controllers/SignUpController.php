<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class SignUpController extends Controller
{
    public function index(): View
    {
        $roles = Role::pluck('name', 'id')->toArray();
        return view('auth.sign-up', compact('roles'));
    }
    public function create(Request $request)
    {
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
            ]);
            $validated['role_id'] = $request->get('role');

            $authenticated_user = User::create($validated);

            $role = Role::find($validated['role_id']);

            $authenticated_user->assignRole($role);

            // authenticate the user inside the system
            Auth::login($authenticated_user);

            return redirect('/');
    }
}
