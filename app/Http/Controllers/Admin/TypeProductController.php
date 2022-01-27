<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Typeproduct;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function typeproduct()
    {
        $typeproduct = Typeproduct::all();
        return view('admin/typeproduct',compact('typeproduct'));
    }

    public function edit($id)
    {
        $typeproduct = Typeproduct::find($id);
        return view('admin.edit.editTypeproduct',compact('typeproduct'));
    }
    public function update(Request $request, $id)
    {
        $typeproduct = Typeproduct::find($id);
        $typeproduct->name = $request->name;
        $typeproduct->save();
        return redirect()->route('typeproduct');
    }
   public function del($id)
    {
        $typeproduct = Typeproduct::find($id);
        $typeproduct->delete();
        return redirect()->route('typeproduct');
    }
}
