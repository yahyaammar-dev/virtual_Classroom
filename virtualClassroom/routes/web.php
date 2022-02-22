<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdmin;
use App\Http\Controllers\SignupSubAdmin;
use App\Http\Controllers\SubAdminLogin;
use App\Http\Controllers\SignupTeacher;
use App\Http\Controllers\LoginTeacher;
use App\Http\Controllers\SignupStudent;
use App\Http\Controllers\LoginStudent;
use App\Http\Controllers\admindashboard;
use App\Http\Controllers\superadmin;
use App\Http\Controllers\SubAdmins;
use App\Http\Controllers\classdata;
use App\Http\Controllers\Login;
use App\Http\Controllers\Singup;
use App\Http\Controllers\subadmin;
use App\Http\Controllers\teacher;
use App\Http\Controllers\student;
use App\Http\Controllers\createclass;
use App\Http\Controllers\joinclass;
use App\Http\Controllers\classstream;
use App\Http\Controllers\poststream;
use App\Http\Controllers\makepayment;
use App\Http\Controllers\submitpayment;
use App\Http\Controllers\teacherpay;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Login::class,'Login']);

Route::post('loginadmin', [LoginAdmin::class,'loginuser']);

Route::post('signupsubadmin', [SignupSubAdmin::class,'SignupSubAdmin']);

Route::post('subadminlogin', [SubAdminLogin::class,'Sub_Admin_Login']);

Route::post('loginadmin',  [LoginAdmin::class,'loginuser']);

Route::post('SignupTeacher',  [SignupTeacher::class,'SignupTeacher']);

Route::post('LoginTeacher',  [LoginTeacher::class,'LoginTeacher']);

Route::post('LoginStudent',  [LoginStudent::class,'LoginStudent']);

Route::post('SignupStudent',  [SignupStudent::class,'SignupStudent']);

Route::post('LoginStudent',  [LoginStudent::class,'LoginStudent']);

Route::get('admindashboard',  [admindashboard::class,'admindashboard']);

Route::get('superadmin',  [superadmin::class,'superadmin']);

Route::get('SubAdmins',  [SubAdmins::class,'SubAdmins']);

Route::get('classdata',  [classdata::class,'getTeacherName']);

Route::get('signup', [Singup::class,'Singup']);

Route::get('subadmins', [subadmin::class,'subadmin']);

Route::get('teachers', [teacher::class,'teacher']);

Route::get('students', [student::class,'student']);

Route::post('createclass', [createclass::class,'createclass']);

Route::post('joinclass', [joinclass::class,'joinclass']);

Route::post('classstream', [classstream::class, 'classstream']);

Route::post('poststream', [poststream::class, 'poststream']);

Route::get('makepayment',[makepayment::class, 'makepayment']);

Route::post('submitpayment',[submitpayment::class, 'submitpayment']);

Route::post('teacherpay',[teacherpay::class, 'teacherpay']);


Route::get('courses', function () {
    return view('courses');
});

Route::get('stream', function () {
    return view('stream');
});

Route::get('attendance', function () {
    return view('attendance');
});

Route::get('recorded', function () {
    return view('recorded');
});

Route::get('teacherprofile', function () {
    return view('teacherprofile');
});

Route::get('paymentlist', function () {
    return view('paymentlist');
});

Route::get('classroomapproval', function () {
    return view('classroomapproval');
});

Route::get('notifications', function () {
    return view('notifications');
});

Route::get('addtocart', function () {
    return view('addtocart');
});

Route::get('checkout', function () {
    return view('checkout');
});