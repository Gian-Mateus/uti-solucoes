<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index(){
        return view('page.contact');
    }

    public function save(){
        return dd();
    }
}
