<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    public function getListClass()
    {
        //Lay du lieu tu database
        $list_class = Classes::all();
        return view('listClass', compact('list_class'));
    }

    public function addClass(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:25",
            "avatar" => "required|url",
            "status" => "required|integer",
            "userId" => "required|integer",
            "subjectId" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $add_cl = new Classes();
            $add_cl->name = $request->name;
            $add_cl->avatar = $request->avatar;
            $add_cl->status = $request->status;
            $add_cl->userId = $request->userId;
            $add_cl->subjectId = $request->subjectId;
            $add_cl->save();
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
        dd($add_cl->toArray());

    }

    public function upClass(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|min:2|max:25",
            "avatar" => "required|url",
            "status" => "required|integer",
            "userId" => "required|integer",
            "subjectId" => "required|integer"
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->first()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        try {
            $up_cl = Classes::find($id);
            $up_cl->name = $request->name;
            $up_cl->avatar = $request->avatar;
            $up_cl->status = $request->status;
            $up_cl->userId = $request->userId;
            $up_cl->subjectId = $request->subjectId;
            $up_cl->save();
            dd('Update Completed');
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
    }

    public function delClass($id)
    {
        try {
            $del_cl = Classes::find($id);
            $del_cl->delete();
            dd('Delete Completed');
        } catch (ModelNotFoundException $ex) {
            return response()->json([], SC_QUERRY_ERROR); //user not found
        } catch (\Exception $ex) {
            return response()->json([
                "meta" => ["code" => "SERVER_ERROR", "msg" => "SERVER ERROR"],
                "data" => $ex], SC_SERVER_ERROR); //anything went wrong
        }
    }

}
