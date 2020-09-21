<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\T_Available;

use Illuminate\Support\Facades\DB;

//use Validator;

class T_AvailableController extends Controller
{
 
	
function available(Request $request){
	
$List = T_Available::all();
                    
return view('t_available.available')->with('alist',$List);
 }
function search(Request $req)
    {
       
        
        $List = T_Available::where('area', 'like', '%'.$req->key.'%')
                                ->get();
        
        return view('t_available.availablelist')->with('alist',$List);
    }




}
