<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_StudentsController extends Controller
{

   
   
	
function students(Request $request){
	
$students = new T_User();
 $data= $students->where('type', 'student')
                        ->get();
                    
	 
	 
	 
	   return view('t_students.students')->with('users', $data);
 }



}
