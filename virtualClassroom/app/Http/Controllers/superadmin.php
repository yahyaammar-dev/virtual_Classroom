<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;
use App\Models\TeachersM;
use App\Models\classroomsM;

class superadmin extends Controller
{
    public function superadmin(){
  
        $subadmins = AdminsM::all()->where('type','subadmin'); 
        
        $teachers = TeachersM::all()->where('admin','mercedes');

        $account = TeachersM::where(['admin' => 'mercedes', 'status' => 'false'])->get();
       
        $classrooms = classroomsM::where(['status' => 'false'])->get();
  
        return view('admindashboard',
        [
            'data'=>$subadmins,
            'teacher'=>$teachers,
            'account'=>$account,
            'classrooms'=>$classrooms
        ]
        );


    }
}
