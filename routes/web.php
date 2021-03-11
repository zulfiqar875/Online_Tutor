<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

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
    return view('Dashboard');
});
Route::get('/teacher', function () {
    return view('Register');
});
Route::get('/login', function () {
    return view('Login');
});
Route::post('/Auth','App\Http\Controllers\TeacherController@Login');
Route::get('/teacherlist','App\Http\Controllers\TeacherController@teacherlist');
Route::post('/TeacherAdd','App\Http\Controllers\TeacherController@AddData');
Route::post('/findtutor','App\Http\Controllers\TeacherController@findtutor');
Route::post('/see tutor/{Tid}/{Cid}','App\Http\Controllers\TeacherController@seetutor');
Route::post('/addnewsub/{Tid}/{FirstName}','App\Http\Controllers\TeacherController@addnewsub');

Route::post('/group/{Tid}/{teachername}','App\Http\Controllers\TeacherController@AddGroupStudy');
Route::post('/cancel/{Gid}','App\Http\Controllers\TeacherController@cancel');
Route::post('/findstudy','App\Http\Controllers\TeacherController@findgroup');
Route::post('/groupstudydetail/{Tid}/{Gid}','App\Http\Controllers\TeacherController@groupdetail');
