<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\T_Fileupload;
use App\Http\Requests\T_FileuploadRequests;
use Illuminate\Support\Facades\DB;

//use Validator;

class T_FileuploadController extends Controller
{

   function check(Request $request){
	
$check = new T_Fileupload();
 $data= $check->where('teacher_name', $request->session()->get('username'))
                        ->get();
                    
	 
	 
	 
	   return view('t_fileupload.check')->with('users', $data);
 }
   
	




	    public function upload(Request $request){
        return view('t_fileupload.fileupload');
    }

	   public function store(T_FileuploadRequests $request){
  
  if($request->hasFile('myfile')){
            $file = $request->file('myfile');
            $filename = $file->getClientOriginalName();
			
            echo "File Extension: ". $file->getClientOriginalExtension()."<br>";
            echo "File Size: ". $file->getSize()."<br>";
            echo "File Mime Type: ". $file->getMimeType();
        
            if($file->move('upload', $filename)){
                $user = new T_Fileupload();
        $user->name    = $request->name;
        $user->file    = $filename;
		$user->date    = $request->date;
		$user->teacher_name = $request->session()->get('username');	
        $user->save();   
            }else{
                echo "<h1>Error!</h1>";
            }
        }

       

        return redirect()->route('home.checknotes');
    }
	
	function delete($id){

   
    	
        $user = T_Fileupload::find($id);
        return view('t_fileupload.delete')->with('user', $user);

    }
 function destroy($id, Request $request){
    	
    
        if(T_Fileupload::destroy($id)){
            return redirect()->route('home.checknotes');
        }else{
            return redirect()->route('home.checknotes', $id);
        }
    }


}
