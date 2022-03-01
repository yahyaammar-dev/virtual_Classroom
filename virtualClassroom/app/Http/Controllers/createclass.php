<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\classroomsM;
use App\Models\teacher_classroom;
use DB;

class createclass extends Controller
{
    public function createclass(REQUEST $req){
        
        
       $classname = $req->classname;
       $teacher_name=  session("user")["id"];


       $class = new classroomsM;
       $class->user = $classname;
       $class->status = "false";
       $class->status = "classroom";
       $class->save();


       //get the id of inserted classroom
        $cur_class = DB::table('classrooms')->max('id');


        $tech_class= new teacher_classroom;
        $tech_class->classroom_id = $cur_class;
        $tech_class->teacher_id = $teacher_name;
        $tech_class->save();

        return redirect()->back();

    }
}
