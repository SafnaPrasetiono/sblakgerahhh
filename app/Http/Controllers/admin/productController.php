<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
    // show all product
    public function product(){
        return view('admin.product');
    }

    // show add product pages
    public function addproduct(){
        return view('admin.addproduct');
    }
}
