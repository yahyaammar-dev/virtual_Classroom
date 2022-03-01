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


            $image = $req->file('file');
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/images'),$image_name);
        
            $image_path = "/images/" . $image_name;


//            $fileName = time().'_'.$req->file->getClientOriginalName();
       //     $filePath = $req->file('file')->storeAs('uploads', $image_name, 'public');
            $fileModel->url =  $image_path;
            $fileModel->content = $req->title;
            $fileModel->save();

            $lecid = DB::table('lecture')->max('id');

            $add = new classroom_lectures;
            $add->classroom_id = $req->classid;
            $add->lectures_id = $lecid;
            $add->save();
        }else{
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