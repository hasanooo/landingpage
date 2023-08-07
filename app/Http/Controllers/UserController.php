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
                'phone' => 'required|number',
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
        $notice = array(
            'message' => 'your information add successfully',
            'alert' => 'warning'
        );
        return redirect()->back()->with($notice);
    }
}
