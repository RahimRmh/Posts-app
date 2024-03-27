<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function check_user(){
      $name= request()->query('name');
      $phone= request()->query('phone');
      $email= request()->query('email');
        
        
        if(!isset($name)and !isset($email) and !isset($phone) )
      echo "you have to fill email";

         $projects=project::all();

         foreach($projects as $pro){
            if($email == $pro->email or $phone == $pro-> phone_number ){
                        echo "sucsess";
                        return;
                    }}

   
   
        echo "error" ;}
    
  
    
        
    }
   
