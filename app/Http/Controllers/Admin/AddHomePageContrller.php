<?php

namespace App\Http\Controllers\Admin;

use App\Homepage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddHomePageContrller extends Controller
{
    public function addhomepage()
    {
        return view('admin.add.addHomepage');
    }
    
    public function create(Request $request)
    {
        // dd($request);
        $homepage = new Homepage;
        $homepage->text = $request->text;
        $homepage->popular = $request->popular;
        $homepage->promotion = $request->promotion;
        $homepage->productname = $request->productname;
        $homepage->background = $request->background;
        $homepage->price = $request->price;
        
           

        $homepage->save();
        return redirect()->route('homepage');
       

    }
}
