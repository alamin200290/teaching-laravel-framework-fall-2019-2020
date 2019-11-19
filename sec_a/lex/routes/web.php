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

Route::get('/', function(){
	return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'LogoutController@index');
Route::get('/student/userlist', 'StudentController@index')->name('student.index');

Route::get('/student/userlist', ['as'=>'student.index','uses'=>'StudentController@index']);






