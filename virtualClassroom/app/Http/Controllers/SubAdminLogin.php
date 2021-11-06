<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;

class SubAdminLogin extends Controller
{
    public function Sub_Admin_Login(REQUEST $request){
        $users = AdminsM::where('email', '=', $request->email)->where('pass', '=', $request->pass)->get();
        if( !$users->count()){
            return redirect('/');
        }else{
            $request->session()->put('user',$users[0]);
            return redirect('admindashboard');
        }
    }
}
