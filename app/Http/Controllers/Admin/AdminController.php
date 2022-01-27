<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin/index',compact('products'));
    }
  
}
