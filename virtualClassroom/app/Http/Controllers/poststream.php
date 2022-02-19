<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lectures;
use App\Models\classroom_lectures;
use DB;


class poststream extends Controller
{
    public function poststream(REQUEST $req){
        echo $req->classid . '<br />';


        $fileModel = new lectures;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->url = '/storage/' . $filePath;
            $fileModel->content = $req->title;
            $fileModel->save();

            $lecid = DB::table('lecture')->max('id');

            $add = new classroom_lectures;
            $add->classroom_id = $req->classid;
            $add->lectures_id = $lecid;
            $add->save();
        }
    }
}