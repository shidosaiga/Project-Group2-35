<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('admin/user',compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit.editUser',compact('user'));
    }
   public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone= $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('user');
    }

    public function del($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}
