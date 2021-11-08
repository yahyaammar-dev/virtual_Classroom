<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class admindashboard extends Controller
{
    public function admindashboard(REQUEST $req){
       $data = session::get('user');
       $data = json_decode($data);
       echo $data->type;
       if($data->type == 'superadmin'){
            return redirect('superadmin');
       }else{
            return redirect('subadmins');
       }
    }
}
