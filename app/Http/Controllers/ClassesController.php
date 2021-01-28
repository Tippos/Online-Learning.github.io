<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

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
        $add_cl = new Classes();
        $add_cl->name = $request->name;
        $add_cl->avatar = $request->avatar;
        $add_cl->status = $request->status;
        $add_cl->userId = $request->userId;
        $add_cl->subjectId = $request->subjectId;
        $add_cl->save();
        dd($add_cl->toArray());

    }

    public function upClass(Request $request, $id)
    {
        $up_cl = Classes::find($id);
        $up_cl->name = $request->name;
        $up_cl->avatar = $request->avatar;
        $up_cl->status = $request->status;
        $up_cl->userId = $request->userId;
        $up_cl->subjectId = $request->subjectId;
        $up_cl->save();
        dd('Update Completed');

    }

}
