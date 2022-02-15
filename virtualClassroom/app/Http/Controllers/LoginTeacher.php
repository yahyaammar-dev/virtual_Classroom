<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersM;
use App\Models\classroomsM;
use App\Models\Student;
use App\Models\teacher_classroom;
use App\Models\student_classroom;

class LoginTeacher extends Controller
{
    public function LoginTeacher(REQUEST $request){
        $users = TeachersM::where('email', '=', $request->email)->where('password', '=', $request->pass)->get();
        if( !$users->count()){
            return redirect('/');
        }else{
            $request->session()->put('user',$users[0]);
             return redirect('teachers');
        }
    }
}