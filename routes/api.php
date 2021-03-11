<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('register', 'App\Http\Controllers\API\RegisterController@register');
// Route::post('login', 'App\Http\Controllers\API\RegisterController@login');

// Route::post('teacherreg', 'App\Http\Controllers\TeacherController@apiteachregister');
// Route::post('teacherlogin', 'App\Http\Controllers\TeacherController@apiteachlogin');
// Route::get('/teacherlist','App\Http\Controllers\TeacherController@apiteacherlist');
// Route::get('/courselist','App\Http\Controllers\TeacherController@apicourselist');
// Route::get('/grouplist','App\Http\Controllers\TeacherController@apigrouplist');

// Route::post('/group/{Tid}/{teachername}','App\Http\Controllers\TeacherController@apiAddGroupStudy');

   
// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', 'App\Http\Controllers\API\ProductController');
// });

Route::post('teacherreg', 'App\Http\Controllers\TeacherController@apiteachregister');
Route::post('teacherlogin', 'App\Http\Controllers\TeacherController@apiteachlogin');
Route::get('/teacherlist','App\Http\Controllers\TeacherController@apiteacherlist');
Route::get('/courselist','App\Http\Controllers\TeacherController@apicourselist');
Route::get('/grouplist','App\Http\Controllers\TeacherController@apigrouplist');

Route::post('/addgroup','App\Http\Controllers\TeacherController@apiAddGroupStudy');
Route::post('/addcourse','App\Http\Controllers\TeacherController@apiAddCourse');