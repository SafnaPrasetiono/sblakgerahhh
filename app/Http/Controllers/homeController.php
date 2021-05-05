<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // show home route
    public function home(){
        return view('home');
    }
}
