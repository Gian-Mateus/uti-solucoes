<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginClientController extends Controller
{
    public function index(){
        if (Auth::guard('client')->check()) {
            return redirect()->route('client.home');
        }
        return view('client.login');
    }

    public function forgotPassword(){
        return view('client.forgot-password');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('client')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended(route('client.home'));
        }
 
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }
}
