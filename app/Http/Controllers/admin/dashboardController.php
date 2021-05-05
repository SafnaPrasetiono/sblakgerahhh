<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    // return view to dashboard pages
    public function dashboard(){
        return view('admin.home');
    }
}
