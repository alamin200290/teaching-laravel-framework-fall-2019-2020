<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){

    	/*$data = ['id'=>'10-222-3', 'name'=>'alamin'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('id', '12-2222-2')
    			->with('name', 'alamin');*/

/*    	return view('home.index')
    			->withId('12-2222-2')
    			->withName('alamin');*/

    	$v = view('home.index');
    	$v->withId('12-2222-2');
    	$v->withName('alamin');
    	return $v;
    }
}



