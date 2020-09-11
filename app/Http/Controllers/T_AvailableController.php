<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\T_Available;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_AvailableController extends Controller
{
 
	
function available(Request $request){
	
$data = T_Available::all();
                    
	   return view('t_available.available')->with('users', $data);
 }





}
