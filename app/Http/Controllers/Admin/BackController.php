<?php

namespace App\Http\Controllers\Admin;

use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackController extends Controller
{
    public function back()
    {
        $background = Background::all();    
        return view('admin/back',compact('background'));
    }

    public function edit($id)
    {
        $background = Background::find($id);
        return view('admin.edit.editbackground',compact('background'));
    }
    public function update(Request $request, $id)
    {
        $background = Background::find($id);
        $background->image = $request->image;
        $background->save();
        return redirect()->route('back');
    }

    public function del($id)
    {
        $background = Background::find($id);
        $background->delete();
        return redirect()->route('back');
    }
}
