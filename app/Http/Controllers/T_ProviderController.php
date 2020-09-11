<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_ProviderController extends Controller
{

   
   
	
function contact(Request $request){
	
$provider = new T_User();
 $data= $provider->where('type', 'tp')
                        ->get();
                    
	 
	 
	 
	   return view('t_ctp.contact')->with('users', $data);
 }



}
