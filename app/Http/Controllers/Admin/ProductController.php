<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();
        return view('admin/product',compact('products'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit.editProduct',compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->typeproduct_id = $request->typeproduct_id;
        $product->image = $request->image;
        $product->save();
        return redirect('product');
    }
    public function del($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('product');
    }

   
   
}
