<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index', [
            "title" => "Sign in",
            "active" => "login",
        ]);
    }
}
