<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    public function addproduct()
    {
        return view('admin.add.addproduct');
    }
    public function create(Request $request)
    {
        // dd($request);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->typeproduct_id = $request->typeproduct_id;
        $product->image = $request->image;
            // if($request->hasFile('image'))
            // {
            //     $filemane = Str::ramdom(10).'.'.$request->file('image')->getClientOriginalExtension();
            //     $request->file('image')->move(public_path().'admin/img/',$filemane);
            //     Image::make(public_path().'admin/img/'.$filemane);
            //     $product->image =$filemane;
            // }
            // else{
            //     $product->image ='nopic.jpg';
            // } 

        $product->save();
        return redirect()->route('product');
       

    }
}
