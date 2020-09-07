<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;
use App\T_Salary;
use App\Http\Requests\T_SalaryRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_SalaryController extends Controller
{

   
   
	
function salary(Request $request){
	
$salary = new T_Salary();
 $data= $salary->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_salary.salary')->with('users', $data);
 }




	    public function sinsert(Request $request){
        return view('t_salary.sinsert');
    }








	   public function sstore(T_SalaryRequests $request){
	
        $user = new T_Salary();
        $user->name     = $request->name;
        $user->salary    = $request->salary;
		$user->teacher_name = $request->session()->get('username');	
        $user->save();

        return redirect()->route('home.salary');
    }
	
	
	  function sedit($id){


        $user = T_Salary::find($id);
    	return view('t_salary.sedit')->with('user', $user);

    }
	


 function supdate($id, T_SalaryRequests $request){

    

        $user = T_Salary::find($id);
        $user->name = $request->name;
        $user->salary = $request->salary;
        $user->save();

    	return redirect()->route('home.salary');

    }

 function sdelete($id){

   
    	
        $user = T_Salary::find($id);
        return view('t_salary.sdelete')->with('user', $user);

    }
 function sdestroy($id, Request $request){
    	
    
        if(T_Salary::destroy($id)){
            return redirect()->route('home.salary');
        }else{
            return redirect()->route('home.salary', $id);
        }
    }


}
