<?php

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

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/home', ['uses'=>'HomeController@index']);
//Route::get('/admin/userList', 'StudentController@index')->name('student.index');

Route::get('/student/userList', ['as'=>'student.index','uses'=>'StudentController@index']);

Route::get('/student/details', 'StudentController@details')->name('student.details');



