<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    // getHome
    public function getHome(){
        return view('home');
    }

}
?>