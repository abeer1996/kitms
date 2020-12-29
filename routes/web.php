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
    return view('welcome');
});

// Frontend Routing
Route::get('/','Frontend\HomeController@home')->name('home');

 
// Login Routing
 Route::get('/login','Backend\UserController@login')->name('login');
 Route::post('/login','Backend\UserController@loginProcess')->name('login.process');


Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/admin', function(){
        return view('Backend.Layout.home');
    })->name ('home');

Route::get('/logout','Backend\UserController@logout')->name('logout');
});



Route::group(['prefix'=>'dashboard','namespace'=>'Backend','middleware'=>'auth'],function(){


// Backend Routing
Route::get('/','HomeController@dashboard')->name('dashboard');

// Role Routing
Route::get('/registration/role','RegisterController@role')->name('role.register');
Route::post('/registration/role','RegisterController@roleStore')->name('role.store');

// Students Routing
Route::get('/registration/student/form','RegisterController@studentForm')->name('student.form');
Route::post('/registration/student/form','RegisterController@studentFormSubmit')->name('student.formsubmit');
Route::get('/registration/student/list','RegisterController@studentList')->name('student.list');

// Teachers Routing
Route::get('/registration/teacher/form','RegisterController@teacherForm')->name('teacher.form');
Route::post('/registration/teacher/form','RegisterController@teacherFormSubmit')->name('teacher.formsubmit');
Route::get('/registration/teacher/list','RegisterController@teacherlist')->name('teacher.list');

});

