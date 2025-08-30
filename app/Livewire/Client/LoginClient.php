<?php

namespace App\Livewire\Client;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class LoginClient extends Component
{
    public $login;
    public $password;

    public function authenticate()
    {
        $credentials = $this->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('client')->attempt($credentials)) {
            session()->regenerate();
 
            return redirect()->intended(route('client.home'));
        }
 
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }

    #[Layout('components.layouts.client')]
    public function render()
    {
        return view('livewire.client.login-client');
    }
}
