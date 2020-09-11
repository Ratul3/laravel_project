<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Exam;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_ExamController extends Controller
{

   
   
	
function answer(Request $request){
	
$answer = new T_Exam();
 $data= $answer->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_exam.answer')->with('users', $data);
 }





}
