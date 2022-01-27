<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Homepage;

class HomepageController extends Controller
{
    public function homepage()
    {
        $homepage = Homepage::all();
        return view('admin/homepage',compact('homepage'));
        
    }

    public function edit($id)
    {
        $homepage = Homepage::find($id);
        return view('admin.edit.edithomepage',compact('homepage'));
    }

    public function update(Request $request, $id)
    {
        $homepage = Homepage::find($id);
        $homepage->text = $request->text;
        $homepage->popular = $request->popular;
        $homepage->promotion = $request->promotion;
        $homepage->productname = $request->productname;
        $homepage->background = $request->background;
        $homepage->price = $request->price;
        $homepage->save();
        return redirect()->route('homepage');
    }
    public function del($id)
    {
        $homepage = Homepage::find($id);
        $homepage->delete();
        return redirect()->route('homepage');
    }
}
