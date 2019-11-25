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

	echo "welcome";
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/home', ['uses'=>'HomeController@index']);
//Route::get('/admin/userList', 'StudentController@index')->name('student.index');

Route::get('/student/userList', ['as'=>'student.index','uses'=>'StudentController@index']);
Route::get('/student/details/{id}', 'StudentController@details')->name('student.details');

Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');
Route::post('/student/edit/{id}', 'StudentController@update')->name('student.update');

Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');
Route::post('/student/delete/{id}', 'StudentController@destroy')->name('student.destroy');

Route::get('/student/add', 'StudentController@add')->name('student.add');
Route::post('/student/add', 'StudentController@insert');

