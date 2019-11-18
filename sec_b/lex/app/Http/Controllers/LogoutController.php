<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function index(Request $request){

    	$request->session()->flush();
    	return redirect('/login');
    }
}
