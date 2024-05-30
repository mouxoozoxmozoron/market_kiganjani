<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class auth_controller extends Controller
{
    //
    public function login_screen_request()
    {
        return view('screens/auth/login');
    }

    public function register_screen_request()
    {
        return view('screens/auth/register');
    }
}
