<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function formsubmit(Request $req)
    {
        $req->validate(
            [
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'email' => 'required',
                'company' => 'required',
            ]



        );
        $user = new User();
        $user->name = $req->name;
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->email = $req->email;
        $user->company_name = $req->company;
        $user->save();
        $notification = array(
            'message' => 'Your message has been sent. Thank you!',
            'alert' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    function userlist()
    {
        $users=User::all();
        return view('home.userlist')->with('user',$users);
    }
}