<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('sign-up');
    }
    public function create()
    {
        //TODO: authentication part to check if the user it's in the db or not

        // validation
        request()->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:12']
        ]);

        // add the user inside the db
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
            'email_verified_at' => fake()->time
        ]);

        return redirect('/');
    }
}
