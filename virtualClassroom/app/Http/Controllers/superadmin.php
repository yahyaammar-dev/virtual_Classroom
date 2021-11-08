<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;
use App\Models\TeachersM;

class superadmin extends Controller
{
    public function superadmin(){
  
        $subadmins = AdminsM::all()->where('type','subadmin'); 
        
        $teachers = TeachersM::all()->where('admin','mercedes');
  
        return view('admindashboard',
        [
            'data'=>$subadmins,
            'teacher'=>$teachers
        ]
        );


    }
}
