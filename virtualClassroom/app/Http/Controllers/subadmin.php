<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeachersM;
use App\Models\classroomsM;
use App\Models\Student;
use App\Models\teacher_classroom;

class subadmin extends Controller
{
    public function subadmin(){
        // students, classes, teacheres

        $user_name = session('user')->user;  

        $teachers = TeachersM::all()->where('admin',$user_name);
       
        $classrooms = [];

        foreach($teachers as $teacher){
            $row = teacher_classroom::all()->where('teacher_id',$teacher["id"]);
            $classes = [];
            foreach($row as $item){
                $classes = classroomsM::all()->where('id',$item["classroom_id"]);
            }
            array_push($classrooms, $classes);
        }

        $students = Student::all()->where('course',$user_name);


        return view("subadmins",
        [
            "teachers"=>$teachers,
            "classrooms"=>$classrooms,
            "students"=>$students
        ]);
        }
}
