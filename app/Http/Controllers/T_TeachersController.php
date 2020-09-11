<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_TeachersController extends Controller
{

   
   
	
function teachers(Request $request){
	
$teachers = new T_User();
 $data= $teachers->where('type', 'teacher')
                        ->get();
                    
	 
	 
	 
	   return view('t_teachers.teachers')->with('users', $data);
 }



}
