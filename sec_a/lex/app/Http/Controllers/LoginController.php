<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
		if($request->username == $request->password){

			$request->session()->put('uname', $request->input('username'));

			return redirect('/home');
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect()->route('login.index');
		}
	}
}


