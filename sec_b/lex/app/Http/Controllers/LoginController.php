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

			$req->session()->put('name', $req->input('username'));
			return redirect('/home');
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect('/login');
		}
	}

}
