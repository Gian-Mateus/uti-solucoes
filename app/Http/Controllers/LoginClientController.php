<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginClientController extends Controller
{
    public function index(){
        return view('page.login');
    }
}
