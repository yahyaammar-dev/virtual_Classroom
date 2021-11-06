<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class LoginStudent extends Controller
{
    public function LoginStudent(REQUEST $request){
        $users = Student::where('email', '=', $request->email)->where('password', '=', $request->pass)->get();
        if( !$users->count()){
            return redirect('/');
        }else{
            $request->session()->put('user',$users[0]);
            return redirect('admindashboard');
        }
    }
}
