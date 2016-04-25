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
class successController extends Controller{
   



 public function success(){
 
  $FirstName=Input::get('firstname');
  $LastName=Input::get('lastname');
          $EmailAddress=Input::get('email');
          $Password=Input::get('password');
          
       echo   DB::table('Forum')->insert(
   ['FirstName' => $FirstName,
       'LastName' => $LastName,
   'EmailAddress' => $EmailAddress,
   'Password' => $Password]);
       return '<br>success fully registered.';
 }
 public function registersubmit()
 {
     return "success";
 }

 public function login(){
 
       
          $users = DB::table('Forum')->select('EmailAddress','Password')->get();
       echo print_r($users);
  
       return '<br>success fully Loged in.';
 }
 public function loginsubmit()
 {
     return "success";
 }
 
}