<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
        {
    
            $credentials = $request->validate([
            'email' =>'required|email:dns',
            'password' =>'required'
            ]);
    
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
    
            return back()->with('loginError', 'Login Failed!');
    
        }
    
        public function logout()
        {
            Auth::logout();
    
            request()->session()->regenerate();
    
            request()->session()->regenerateToken();
    
            return redirect('/');
        }
}
    