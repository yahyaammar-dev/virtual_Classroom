<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TeachersM;
use App\Models\classroomsM;
use App\Models\Student;
use App\Models\teacher_classroom;
use App\Models\payments;

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


        $allstudents = [];
        foreach($students as $student){
             array_push($allstudents,$student["id"]);
        }

        $paid = payments::all()->where('admin', $user_name);

        $paidids = [];
        foreach($paid as $p){
            array_push($paidids,$p["idofpayee"]);
        }


        $notpaid = [];




        foreach($paidids as $item){
            for($i=0; $i<count($allstudents); $i++){
                if($allstudents[$i]==$item){
                \array_splice($allstudents, $i, 1);
                }
            }
        }



    $unpaid = [];
foreach($allstudents as $item){
    $paid = student::all()->where('id',$item);
    array_push($unpaid,$paid);
}


    $paidstds = [];
foreach($paidids as $item){
    $paid = student::all()->where('id',$item);
    array_push($paidstds, $paid);
}







        return view("subadmins",
        [
            "teachers"=>$teachers,
            "classrooms"=>$classrooms,
            "students"=>$students,
            "paid"=>$paidstds,
            "unpaid"=>$unpaid
        ]);
        }
}
