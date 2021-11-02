<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::get('signup', function () {
    return view('signup');
});

Route::get('admindashboard', function () {
    return view('admindashboard');
});

Route::get('subadmins', function () {
    return view('subadmins');
});

Route::get('teachers', function () {
    return view('teachers');
});

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