<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddContentController extends Controller
{
    public function addcontent()
    {
        return view('admin.add.addContent');
    }

    public function create(Request $request)
    {
        // dd($request);
        $content = new Content;
        $content->name = $request->name;
        $content->image = $request->image;
        $content->description = $request->description;
        $content->save();
        return redirect()->route('content');
       

    }
}
