<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersM;
use App\Models\classroomsM;
use App\Models\Student;
use App\Models\teacher_classroom;
use App\Models\student_classroom;
use App\Models\AdminsM;
use App\Models\teacherspay;




class teacher extends Controller
{
    public function teacher()    
    {
        $teacher_id =session("user")["id"];
     
        $row = teacher_classroom::all()->where('teacher_id',$teacher_id);
        $allclasses = [];
        $classes = [];
        $students = [];
        $allstds = [];
        $allclasses = [];
        foreach($row as $item){
            $classes = classroomsM::all()->where('id',$item["classroom_id"]);
            array_push($allclasses, $classes);
            foreach($classes as $class){
                $stds = student_classroom::all()->where('id',$class["id"]);
                array_push($allstds,$stds);
            }   
            $ids = [];
            foreach($allstds as $id){
                array_push($ids, $id);
            }

            $i=0;
            foreach($classes as $class){
                $stdst = student::all()->where('id',$ids[$i]);
                $i++;
            }  
            array_push($students, $stdst); 
        }
        array_push($allclasses, $classes);
 
        
        $admin  = AdminsM::all()->where('user', session('user')["admin"]);


        $adminid =  $admin[0]["id"];

        $teacherpay = teacherspay::all()->where('t_id',$teacher_id)->where('a_id',$adminid);
 
 
        echo $teacherpay;

        return view('teachers',
        [
            'students'=>$students,
            'classes'=>$allclasses,
            'teacherpay' => $teacherpay
        ]);
    }
}