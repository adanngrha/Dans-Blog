<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index', [
            "title" => "Register",
            "active" => "register",
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        // $request->session()->flash('success', 'Registration successful! Please Sign in.');

        return redirect('/login')->with('success', 'Registration successful! Please Sign in.');
    }
}
