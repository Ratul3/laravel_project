<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Exam;
use App\Http\Requests\T_ExamRequests;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_ExamController extends Controller
{

 function view(Request $request){  
   return view('t_exam.index'); 
 }
function answer(Request $request){
	
$answer = new T_Exam();
 $data= $answer->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_exam.answer')->with('users', $data);
 }

   public function take(Request $request){
        return view('t_exam.take');
    }


	   public function store(T_ExamRequests $request){
	
        $user = new T_Exam();
        $user->name     = $request->name;
        $user->question    = $request->question;
		$user->date    = $request->date;
		$user->teacher_name = $request->session()->get('username');	
		$user->reply    = '';
        $user->save();

        return redirect()->route('home.questions');
    }
	
function questions(Request $request){
	
$questions = new T_Exam();
 $data= $questions->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_exam.questions')->with('users', $data);
 }

function delete($id){

   
    	
        $user = T_Exam::find($id);
        return view('t_exam.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_Exam::destroy($id)){
            return redirect()->route('home.questions');
        }else{
            return redirect()->route('home.questions', $id);
        }
    }



}
