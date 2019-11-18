<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){

    	$std = [
    			['id'=>'12-222222-1','username'=>'xyz', 'password'=>'123'],
    			['id'=>'13-222222-2','username'=>'asd', 'password'=>'567'],
    			['id'=>'14-222222-3','username'=>'hjk', 'password'=>'345']
    	];

    	return view('student.index')->with('users', $std);
    }
}
