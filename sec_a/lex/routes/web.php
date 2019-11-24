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

Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/student/userlist', 'StudentController@index')->name('student.index');

Route::get('/student/add', 'StudentController@add')->name('student.add');
Route::post('/student/add', 'StudentController@store');

Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/student/edit/{id}', 'StudentController@update');

Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
Route::post('/student/delete/{id}', 'StudentController@destroy');

Route::get('/student/details/{id}', 'StudentController@show')->name('student.details');

Route::get('/student/userlist', ['as'=>'student.index','uses'=>'StudentController@index']);






