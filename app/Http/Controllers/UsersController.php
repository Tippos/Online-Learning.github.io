<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getListUser()
    {
        //Lay du lieu tu database
        $list_user = Users::all();
        return view('listUser', compact('list_user'));

    }

    public function addUser(Request $request)
    {
        $add_us = new Users();
        $add_us->fullName = $request->fullName;
        $add_us->birthday = $request->birthday;
        $add_us->email = $request->email;
        $add_us->phoneNumber = $request->phoneNumber;
        $add_us->job = $request->job;
        $add_us->avatar = $request->avatar;
        $add_us->facebook = $request->facebook;
        $add_us->gender = $request->gender;
        $add_us->country = $request->country;
        $add_us->role = $request->role;
        $add_us->status = $request->status;
        $add_us->save();
       dd($add_us->toArray());
    }

}
