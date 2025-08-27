<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginSystemController extends Controller
{
    public function index(){
        if (Auth::guard('system')->check()) {
            return redirect()->route('system.home');
        }
        return view('app.public.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('system')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('system.home'));
        }
 
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }
}
