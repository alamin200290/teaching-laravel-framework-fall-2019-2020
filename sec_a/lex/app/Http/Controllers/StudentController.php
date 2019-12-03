<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Requests\StudentRequest;
use Validator;

class StudentController extends Controller
{

    function index(Request $request){

        if($request->session()->has('uname')){
            
            $stds = \App\User::all();
            // $stds = DB::table('users')->get();
            return view('student.index')->with('users', $stds);

        }else{
            return redirect()->route('login.index');
        }
    }

    function delete($id){

        $std = ['id'=>'124', 'username'=>'alamin', 'password'=>2223];
        return view('student.delete')->with('std', $std);
    }

    function destroy(Request $request, $id){

        return redirect()->route('student.index');
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
    
        if($request->hasFile('pic')){
            $file = $request->file('pic');
            echo "File Name: ".$file->getClientOriginalName()."<br>";
            echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            echo "File Size: ".$file->getSize()."<br>";
            echo "File Type: ".$file->getMimeType();

            if($file->move('upload', $file->getClientOriginalName())){
                echo "success";
            }
            
        }else{
            echo "fail";
        }





/*        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);*/

/*        $validator = $this->validate($request, [

            'username'=>'required',
            'password'=>'required'
        ])->validate();
        //$validator->validate();*/

/*        $validation = Validator::make($request->all(), [
            'username'=>'required',
            'password'=>'required'
        ]);

        if($validation->fails()){
            //return back()->with('errors', $validation->errors())->withInput();
            return redirect()->route('student.add')
                            ->with('errors', $validation->errors())
                            ->withInput();
        }*/

    	/*$user = new User();
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
        }*/
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

}



