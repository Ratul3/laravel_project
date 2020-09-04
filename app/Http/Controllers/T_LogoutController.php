<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class T_LogoutController extends Controller
{
    function index(Request $request){

    	$request->session()->flush();
    	return redirect('/t_login');
    }
}
