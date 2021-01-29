<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Models\Users;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function getListUser()
    {
        //Lay du lieu tu database
        $list_user = Users::all();
        return view('listUser', compact('list_user'));


    }

    public function getUser($id)
    {
        //Lay du lieu tu database
        $user = Users::find($id);
        return view('userDetail', compact('user'));
    }

    public function addUser(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "fullName" => "required|min:2|max:25",
            "birthday" => "required|integer",
            "email" => "required",
            "phoneNumber" => "required",
            "job" => "required|min:4|max:20",
            "avatar" => "required|url",
            "facebook" => "required|url",
            "gender" => "required|integer",
            "country" => "required|min:4|max:30",
            "role" => "required|integer",
            "status" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
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
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd($add_us->toArray());
    }

    public function upUser(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "fullName" => "required|min:2|max:25",
            "birthday" => "required|integer",
            "email" => "required",
            "phoneNumber" => "required",
            "job" => "required|min:4|max:20",
            "avatar" => "required|url",
            "facebook" => "required|url",
            "gender" => "required|integer",
            "country" => "required|min:4|max:30",
            "role" => "required|integer",
            "status" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $up_us = Users::find($id);
            $up_us->fullName = $request->fullName;
            $up_us->birthday = $request->birthday;
            $up_us->email = $request->email;
            $up_us->phoneNumber = $request->phoneNumber;
            $up_us->job = $request->job;
            $up_us->avatar = $request->avatar;
            $up_us->facebook = $request->facebook;
            $up_us->gender = $request->gender;
            $up_us->country = $request->country;
            $up_us->role = $request->role;
            $up_us->status = $request->status;
            $up_us->save();
            dd('Update Completed');
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
    }

    public function delUser($id)
    {
        try {

            $del_us = Users::find($id);
            $del_us->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
    }

}
