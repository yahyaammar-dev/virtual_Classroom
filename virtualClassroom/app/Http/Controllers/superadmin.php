<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminsM;
use App\Models\TeachersM;
use App\Models\classroomsM;
use App\Models\Student;
use App\Models\payments;
use App\Models\teacherspay;

use DB;

class superadmin extends Controller
{
    public function superadmin(){
  
        $subadmins = AdminsM::all()->where('type','subadmin'); 
        
        $teachers = TeachersM::all()->where('admin','admin');

        $account = TeachersM::where(['admin' => 'mercedes', 'status' => 'false'])->get();
       
        $classrooms = classroomsM::where(['status' => 'false'])->get();

        $students = Student::where(['admin' => 'admin'])->get();



        $subs = payments::all()->where('type', 'subadmin');
        $paid = [];
         foreach($subs as $item){
            array_push($paid, $item["idofpayee"]);
         }

 

        $notpaid = [];

        $data = AdminsM::all()->where('type','subadmin');

        $alladmin = [];
        foreach($data as $item){
            array_push($alladmin,$item["id"]);
        }

        foreach($paid as $item){
            for($i=0; $i<count($alladmin); $i++){
                if($alladmin[$i]==$item){
                \array_splice($alladmin, $i, 1);
                }
            }
        }

        foreach($alladmin as $item){
            array_push($notpaid,$item);
        }

        $alldata = AdminsM::all()->where('type','subadmin');






        $paidd = [];
        foreach($paid as $item){
            foreach($alldata as $item2){
                if($item == $item2["id"]){
                    array_push($paidd, $item2);
                }
            }
        }

        $notpaidd = [];
        foreach($notpaid as $item){
            foreach($alldata as $item2){
                if($item == $item2["id"]){
                    array_push($notpaidd, $item2);
                }
            }
        }





////////////////////////////////////////////////////////////////////////////////////



        $subss = payments::all()->where('type', 'student');
        $paids = [];
        foreach($subss as $item){
            array_push($paids, $item["idofpayee"]);
        }



        $notpaids = [];

        $datas = Student::all()->where('type','student');

        $alladmins = [];
        foreach($datas as $item){
            array_push($alladmins,$item["id"]);
        }




        foreach($paids as $item){
            for($i=0; $i<count($alladmins); $i++){
                if($alladmins[$i]==$item){
                \array_splice($alladmins, $i, 1);
                }
            }
        }

        foreach($alladmins as $item){
            array_push($notpaids,$item);
        }

        $alldatas = Student::all()->where('type','student');








        $paidds = [];
        foreach($paids as $item){
            foreach($alldatas as $item2){
                if($item == $item2["id"]){
                    array_push($paidds, $item2);
                }
            }
        }

        $notpaidds = [];
        foreach($notpaids as $item){
            foreach($alldatas as $item2){
                if($item == $item2["id"]){
                    array_push($notpaidds, $item2);
                }
            }
        }










































        return view('admindashboard',
        [
            'data'=>$subadmins,
            'teacher'=>$teachers,
            'account'=>$account,
            'classrooms'=>$classrooms,
            'student'=>$students,
            'paidsubadmins'=>$paidd,
            'unpaidsubadmins'=>$notpaidd,
            'paidstudents'=>$paidds,
            'unpaidstudents'=>$notpaidds
        ]
        );

    }
}