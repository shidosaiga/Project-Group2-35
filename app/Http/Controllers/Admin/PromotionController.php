<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller
{
    public function promotion()
    {
        $promotion = Promotion::all();
        return view('admin/promotion',compact('promotion'));
    }
    public function edit($id)
    {
        $promotion = Promotion::find($id);
        return view('admin.edit.editpromotion',compact('promotion'));
    }
    public function update(Request $request, $id)
    {
        $promotion = Promotion::find($id);
        $promotion->image = $request->image;
        $promotion->save();
        return redirect()->route('promotion');
    }

    public function del($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();
        return redirect()->route('promotion');
    }
}
