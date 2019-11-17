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
			return redirect('/home');
		}else{
			return redirect('/login');
		}
	}
}


