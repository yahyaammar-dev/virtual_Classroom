<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\classroomsM;
use App\Models\student_classroom;


class joinclass extends Controller
{
    public function joinclass(REQUEST $req){
        $classname = $req->classname;
        $teachername = $req->teachername;

        $class_id = classroomsM::where("user",$classname)->get("id");

        $class =  $class_id[0]->id;
        $student =  session('user')->id;
        
        $add = new student_classroom;
        $add->classroom_id = $class;
        $add->student_id = $student;
        $add->save();
    }
}
