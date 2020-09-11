<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_rnotices;
use App\T_pnotices;
use App\Http\Requests\T_NoticesRequests;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_NoticesController extends Controller
{

 function view(Request $request){  
   return view('t_notices.index'); 
 }
function read(Request $request){
	
$read = new T_rnotices();
 $data= $read->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_notices.read')->with('users', $data);
 }

   public function post(Request $request){
        return view('t_notices.post');
    }


	   public function store(T_NoticesRequests $request){
	
        $user = new T_pnotices();
        $user->name     = $request->name;
        $user->notice    = $request->notice;
		$user->date    = $request->date;
		$user->teacher_name = $request->session()->get('username');	
		
        $user->save();

        return redirect()->route('home.postednotices');
    }
	
function posted(Request $request){
	
$posted = new T_pnotices();
 $data= $posted->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_notices.posted')->with('users', $data);
 }

function delete($id){

   
    	
        $user = T_pnotices::find($id);
        return view('t_notices.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_pnotices::destroy($id)){
            return redirect()->route('home.postednotices');
        }else{
            return redirect()->route('home.postednotices', $id);
        }
    }



}
