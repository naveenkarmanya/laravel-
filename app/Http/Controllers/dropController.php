<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Mail;
use URL;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class dropController extends Controller{
   
    
public function dropdown(){
    
    //Mail::send('emails.auth.test',array('name'=>'naveen'), function($message){
       // $message->to('pawankumar.s@karmanya.co.in','naveen')->subject('test mail');
    //});
    
    //$Search=Input::get('autosuggest');
   
         
            //$users = DB::table('Forum')
                  //->where('City', 'LIKE', "%$Search%")->get();
           //print_r($users);
    return View('dropdown'); //['users1' => $users]);
    
              
}

public function search(){
$Search=Input::get('search_term');
   
         
            $users = DB::table('users')->select('City')->where('City', 'like', $Search."%")->get();
         foreach ($users as $users1) {
            foreach ($users1 as $x => $users2) {
                echo '<li>' . $users2 . '</li>';
            }
        }


        //return View('search',['users1' => $users]);
}
 
}