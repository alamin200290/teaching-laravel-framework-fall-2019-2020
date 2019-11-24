<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(Request $request){

    	$std = $this->getStudentList();
    	return view('student.index')->with('user', $std);
    }

    function delete($id){

        $std = ['id'=>'124', 'username'=>'alamin', 'password'=>2223];
        return view('student.delete')->with('std', $std);
    }

    function destroy(Request $request, $id){

        //delete student from array
        $std = $this->getStudentList();
        //delete student

        return view('student.index')->with('user', $std);
    }

    function show($id){
        //search student from array by ID
        //$std = $this->getStudentList();
        
        $std = ['username'=>'test', 'password'=>'123'];
        return view('student.details')->with('user', $std);        

    }

    function add(){

    	return view('student.add');
    }

    function store(Request $request){

    	//add student value in array
    	$std = $this->getStudentList();
    	//push new student
    	return view('student.index')->with('user', $std);
    }

    function edit($id){

    	//searching student from array by ID
    	$std = ['username'=>'test', 'password'=>'123'];
    	return view('student.edit')->with('user', $std);
    }


    function update(Request $request, $id){

		//update student value in array
    	$std = $this->getStudentList();

    	return view('student.index')->with('user', $std);
    }

    function getStudentList(){
    	return [
    		['id'=>'11111-2', 'username'=>'xyz', 'password'=>'124'],
    		['id'=>'11111-4', 'username'=>'xcz', 'password'=>'1224'],
    		['id'=>'111133-4', 'username'=>'adz', 'password'=>'123']
    	];
    }
}



