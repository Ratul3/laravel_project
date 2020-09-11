<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Grade;
use App\Http\Requests\T_GradeRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_GradeController extends Controller
{



 public function upload(Request $request){
        return view('t_grade.upload');
    }

	   public function store(T_GradeRequests $request){
	
        $user = new T_Grade();
        $user->name     = $request->name;
        $user->grade    = $request->grade;
		$user->date    = $request->date;
		$user->teacher_name = $request->session()->get('username');	
        $user->save();

        return redirect()->route('home.checkgrades');
    }
function check(Request $request){
	
$grades = new T_Grade();
 $data= $grades->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_grade.grades')->with('users', $data);
 }

function delete($id){

   
    	
        $user = T_Grade::find($id);
        return view('t_grade.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_Grade::destroy($id)){
            return redirect()->route('home.checkgrades');
        }else{
            return redirect()->route('home.checkgrades', $id);
        }
    }




}
