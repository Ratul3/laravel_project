<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\T_Schedule;
use App\Http\Requests\T_ScheduleRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_ScheduleController extends Controller
{

   
   
	
function schedule(Request $request){
	
$schedule = new T_Schedule();
 $data= $schedule->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_schedule.schedule')->with('users', $data);
 }




	    public function sinsert(Request $request){
        return view('t_schedule.sinsert');
    }








	   public function sstore(T_ScheduleRequests $request){
	
        $user = new T_Schedule();
        $user->name     = $request->name;
        $user->day    = $request->day;
		$user->time    = $request->time;
		$user->teacher_name = $request->session()->get('username');	
        $user->save();

        return redirect()->route('home.schedule');
    }
	
	
	  function sedit($id){


        $user = T_Schedule::find($id);
    	return view('t_schedule.sedit')->with('user', $user);

    }
	


 function supdate($id, T_ScheduleRequests $request){

    

        $user = T_Schedule::find($id);
        $user->name = $request->name;
        $user->day = $request->day;
		$user->time = $request->time;
        $user->save();

    	return redirect()->route('home.schedule');

    }

 function sdelete($id){

   
    	
        $user = T_Schedule::find($id);
        return view('t_schedule.sdelete')->with('user', $user);

    }
 function sdestroy($id, Request $request){
    	
    
        if(T_Schedule::destroy($id)){
            return redirect()->route('home.schedule');
        }else{
            return redirect()->route('home.schedule', $id);
        }
    }


}
