<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_ProfileController extends Controller
{

   
 function tprofile(Request $request){

	 $user = new T_User();

                        
  $data= $user->where('username', $request->session()->get('username'))
                        ->get();
	 
	 
	 
	   return view('t_profile.profile')->with('users', $data);
 }
 
 
	  function pedit($id){


        $user = T_User::find($id);
    	return view('t_profile.edit')->with('user', $user);

    }
	


 function pupdate($id, Request $request){

    

        $user = T_User::find($id);
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();

    	return redirect()->route('home.tprofile');

    }

 

   
}
