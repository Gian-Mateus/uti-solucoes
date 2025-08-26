<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginSystemController extends Controller
{
    public function index(){
        return view('app.public.login');
    }
}
