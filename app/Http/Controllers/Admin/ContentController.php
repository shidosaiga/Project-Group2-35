<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content;
use App\Product;
class ContentController extends Controller
{
    public function content()
    {
        $content = Content::all();
        return view('admin/content',compact('content'));
    }

   




    public function edit($id)
    {
        $content = Content::find($id);
        return view('admin.edit.editcontent',compact('content'));
    }

    

    public function update(Request $request, $id)
    {
        $content = Content::find($id);
        $content->name = $request->name;
        $content->image = $request->image;
        $content->description = $request->description;
        $content->save();
        return redirect()->route('content');
    }
    public function del($id)
    {
        $content = Content::find($id);
        $content->delete();
        return redirect()->route('content');
    }

     public function contenthome()
    {
        $content = Content::all();
        $products = Product::all();
        return view('welcome',compact('content','products'));
    }


  
    
}
