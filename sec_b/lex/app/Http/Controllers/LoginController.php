<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller 
{
	public function index(){

		return view('login.index');
	}

	public function verify(Request $req){

		if($req->username == $req->password){

			return redirect('/home');
		}else{
			echo "invalid username/password";
		}
	}

}
