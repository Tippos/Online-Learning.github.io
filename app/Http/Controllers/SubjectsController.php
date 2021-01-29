<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
{
    public function getListSubject()
    {

        $list_sub = Subjects::all();
        return view('listSubject', compact('list_sub'));
    }

    public function addSubject(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:25",
            "description" => "required",
            "avatar" => "required|url",
            "facebook" => "required|url",
            "status" => "required|integer",
            "userId" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {


            $add_sb = new Subjects();
            $add_sb->name = $request->name;
            $add_sb->description = $request->description;
            $add_sb->avatar = $request->avatar;
            $add_sb->facebook = $request->facebook;
            $add_sb->status = $request->status;
            $add_sb->userId = $request->userId;
            $add_sb->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd('Add Subject Completed', $add_sb->toArray());

    }

    public function UpSubject(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:25",
            "description" => "required",
            "avatar" => "required|url",
            "facebook" => "required|url",
            "status" => "required|integer",
            "userId" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {

            $up_sub = Subjects::find($id);
            $up_sub->name = $request->name;
            $up_sub->description = $request->description;
            $up_sub->avatar = $request->avatar;
            $up_sub->facebook = $request->facebook;
            $up_sub->status = $request->status;
            $up_sub->userId = $request->userId;
            $up_sub->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd('Update Completed');
    }

    public function delSubject($id)
    {
        try {

            $del_sb = Subjects::find($id);
            $del_sb->delete();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd('Delete Completed');
    }
}


