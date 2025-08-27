<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginClientController extends Controller
{
    public function index(){
        return view('page.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }
}
