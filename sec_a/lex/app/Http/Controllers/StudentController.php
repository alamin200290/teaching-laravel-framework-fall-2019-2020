<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class StudentController extends Controller
{
    function index(Request $request){

    	$stds = \App\User::all();
       // $stds = DB::table('users')->get();
    	return view('student.index')->with('users', $stds);
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

    	$user = new User();

        $user->username = $request->username;
        $user->password =$request->password;
        $user->type ='user';
        $user->dept ='CS';
        $user->name ='';
        $user->cgpa ='';

        if($user->save()){
            return redirect()->route('student.index');
        }else{
            return redirect()->route('student.add');
        }
    }

    function edit($id){

    	$user = User::find($id);
    	return view('student.edit')->with('user', $user);
    }


    function update(Request $request, $id){

        $user = User::find($id);

        $user->username = $request->username;
        $user->password = $request->password;

        $user->save();
    	return redirect()->route('student.index');
    }

    function getStudentList(){
    	return [
    		['id'=>'11111-2', 'username'=>'xyz', 'password'=>'124'],
    		['id'=>'11111-4', 'username'=>'xcz', 'password'=>'1224'],
    		['id'=>'111133-4', 'username'=>'adz', 'password'=>'123']
    	];
    }
}



