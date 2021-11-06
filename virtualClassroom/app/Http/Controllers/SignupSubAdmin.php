<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;

class SignupSubAdmin extends Controller
{
    public function SignupSubAdmin(REQUEST $req){
        $add = new AdminsM;
        $add->user = $req->user;
        $add->pass = $req->pass;
        $add->email = $req->email;
        $add->phone = $req->phone;
        $add->idcard = $req->idcard;
        $add->address = $req->address;
        $add->type = 'subadmin';
        $add->auth_key = '123';
        $add->save();
        return redirect('/');
    }
}
