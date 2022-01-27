<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Promotion;
use Illuminate\Http\Request;

class AddPromotionController extends Controller
{
    public function addpromotion()
    {
        return view('admin.add.addPromotion');
    }

    public function create(Request $request)
    {
        // dd($request);
        $promotion = new Promotion;
        $promotion->image = $request->image;
        $promotion->save();
        return redirect()->route('promotion');
       

    }
}
