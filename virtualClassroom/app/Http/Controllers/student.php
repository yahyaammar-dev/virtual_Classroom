<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_classroom;
use App\Models\classroomsM;
use DB;

class student extends Controller
{
    public function student(){


        $student_id =session("user")["id"];
        $row = student_classroom::all()->where('student_id',$student_id);
        $allclasses = [];
        foreach($row as $item){
            $classes = classroomsM::all()->where('id',$item["classroom_id"]);
            array_push($allclasses,$classes);
        }


     
        return view('student',
    [
        'allclasses'=>$allclasses
    ]);
       
    }
}
