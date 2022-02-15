<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SignupStudent extends Controller
{
    public function signupstudent(REQUEST $req){
        $add = new Student;
        $add->name = $req->user;
        $add->address = $req->address;
        $add->email = $req->email;
        $add->phone = $req->phone;
        $add->password = $req->password;
        $add->course = $req->course;
        $add->admin = $req->admin;
        $add->save();
        return redirect('/');
    }
}