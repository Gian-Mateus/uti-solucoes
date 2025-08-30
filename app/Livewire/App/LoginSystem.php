<?php

namespace App\Livewire\App;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

class LoginSystem extends Component
{
    public $login;
    public $password;

    public function authenticate()
    {
        $credentials = $this->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('system')->attempt($credentials)) {
           session()->regenerate();
 
            return redirect()->intended(route('system.home'));
        }
 
        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.',
        ])->onlyInput('login');
    }
    
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.app.login-system');
    }
}
