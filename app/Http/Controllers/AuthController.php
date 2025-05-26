<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   
    // getLogIn
    public function getLogIn(){
        return view('auth/login');
    }

    // getLogOut
    public function getLogOut(){
        return view('auth/logout');
    }
}
