<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersM;

class SignupTeacher extends Controller
{
    public function SignupTeacher(REQUEST $req){
        $add = new TeachersM;
        $add->name = $req->user;
        $add->idcard = $req->idcard;
        $add->salary = $req->salary;
        $add->address = $req->address;
        $add->username = $req->username;
        $add->password = $req->password;
        $add->phone = $req->phone;
        $add->admin = $req->admin;
        $add->status = 'false';
        $add->save();
        return redirect('/');
    }
}