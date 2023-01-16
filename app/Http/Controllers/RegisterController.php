<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store()
    {
       $request->validate([
        'name' => 'required|max:225',
        'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        'email' => 'required|email|unique:users',
        'password'
       ]);
    }
}
