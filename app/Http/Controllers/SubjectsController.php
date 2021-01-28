<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function getListSubject()
    {

        $list_sub = Subjects::all();
        return view('listSubject', compact('list_sub'));
    }

    public function addSubject(Request $request)
    {
        $add_sb = new Subjects();
        $add_sb->name = $request->name;
        $add_sb->description = $request->description;
        $add_sb->avatar = $request->avatar;
        $add_sb->facebook = $request->facebook;
        $add_sb->status = $request->status;
        $add_sb->userId = $request->userId;
        $add_sb->save();
        dd($add_sb->toArray());

    }

    public function UpSubject(Request $request,$id){
        $up_sub = Subjects::find($id);
        $up_sub->name = $request->name;
        $up_sub->description = $request->description;
        $up_sub->avatar = $request->avatar;
        $up_sub->facebook = $request->facebook;
        $up_sub->status = $request->status;
        $up_sub->userId = $request->userId;
        $up_sub->save();
        dd('Update Completed');
    }
}


