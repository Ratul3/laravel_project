<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_User;


use Illuminate\Support\Facades\DB;

//use Validator;

class T_ProviderController extends Controller
{
 function alltp()
    {
        $List = T_User::all()->where('type','tp');
        
        return view('t_ctp.contact')->with('tplist',$List);
    }
   
   
	

 

 function search(Request $req)
    {
       
        
        $List = T_User::where('type','tp')
                                ->where('username', 'like', '%'.$req->key.'%')
                                ->orWhere('type','tp')
                                ->where('email', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('t_ctp.contactlist')->with('tplist',$List);
    }

}
