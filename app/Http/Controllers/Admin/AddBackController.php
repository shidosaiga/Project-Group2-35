<?php

namespace App\Http\Controllers\Admin;

use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddBackController extends Controller
{
    public function addback()
    {
        return view('admin.add.addBackgrund');
    }

    public function create(Request $request)
    {
        //dd($request);
        $Background = new Background;
        $Background->image = $request->image;
        $Background->save();
        return redirect()->route('back');
       

    }
}
