<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersM;
use App\Models\classroomsM;
use App\Models\Student;
use App\Models\teacher_classroom;
use App\Models\student_classroom;



class teacher extends Controller
{
    public function teacher()    
    {

        //students
        //classrooms



        $teacher_id =session("user")["id"];
        $row = teacher_classroom::all()->where('teacher_id',$teacher_id);
        $allclasses = [];
        $classes = [];
        $students = [];
        foreach($row as $item){
            $classes = classroomsM::all()->where('id',$item["classroom_id"]);
            foreach($classes as $class){
                $stds = student_classroom::all()->where('id',$class["id"]);
            }   
            foreach($classes as $class){
                $stdst = student::all()->where('id',$stds[2]["id"]);
            }  
            array_push($students, $stdst); 
        }
        array_push($allclasses, $classes);
   

        return view('teachers',
        [
            'students'=>$students,
            'classes'=>$classes
        ]);


    }
}