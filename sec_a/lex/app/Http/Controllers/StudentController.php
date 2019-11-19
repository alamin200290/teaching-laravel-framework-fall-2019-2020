<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(Request $request){


    	$std =[

    		['id'=>'11111-2', 'username'=>'xyz', 'password'=>'124'],
    		['id'=>'11111-4', 'username'=>'xcz', 'password'=>'1224'],
    		['id'=>'111133-4', 'username'=>'adz', 'password'=>'123']
    	];

    	return view('student.index')->with('user', $std);
    }
}



