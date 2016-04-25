<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Redirect;

use File;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    
    public function  home(){
        
        return View('user/home');
    }
    public function  registersubmit(){
        
        return View('user/registersubmit');
    }
       public function login(){
           
       if($users){
               return view("user/login",array(
                   "Details"=>$users
               ));
           }
           else{
                return View('user/home',array(
                    'errorLogin'=>'UserName or Password Incorrect'
                ));
           }
            
       }
     public function success(){
 
        if($Insert==0){
         $validate="Registration Complete successfully Please Login";   
        }
        else{
             $validateError="Could not register try again later";
        }
        
        return view('user/egistersubmit', array(
            'message'=>$validate,
            'error'=>$validateError
        ));
       }

}
?>