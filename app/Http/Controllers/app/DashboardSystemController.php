<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSystemController extends Controller
{
    public function index () {
        return view('app.private.dashboard');
    }
}
