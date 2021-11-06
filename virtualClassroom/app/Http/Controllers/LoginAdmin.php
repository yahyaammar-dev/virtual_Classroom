<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;

class LoginAdmin extends Controller
{
    function loginuser(Request $request){
        $users = AdminsM::where('email', '=', $request->email)->where('pass', '=', $request->pass)->get();
        if( !$users->count()){
            return redirect('/');
        }else{
            $request->session()->put('user',$users[0]);
            return redirect('admindashboard');
        }
    }
}
