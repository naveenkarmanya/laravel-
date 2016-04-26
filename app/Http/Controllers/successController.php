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


class successController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    
    public function  home(){
        
        return View('home');
    }
    public function  register(){
        
        return View('user/imageregister');
    }
       public function login(){
           
           $LoginEmailAddress=Input::get('login_email');
           $LoginPassword=Input::get('login_password');
           $validateError=null;
           $validate=null;
           $users = DB::table('Forum')->where('EmailAddress', $LoginEmailAddress)->where('Password', $LoginPassword)->get();
           
           if($users){
               
               return view("users/userLogin",array(
                   //"Details"=>$users
                        'message'=>'Successfully Login'
               ));
           }
           else{
                return View('/home',array(
                    'error'=>'EmailAddress or Password Incorrect'
                ));
           }
            
       }
      public function success(){
 
  $FirstName=Input::get('firstname');
  $LastName=Input::get('lastname');
          $EmailAddress=Input::get('email');
          $Password=Input::get('password');
          $validateError=null;
           $validate=null;
       $Insert=   DB::table('Forum')->insert(
   ['FirstName' => $FirstName,
       'LastName' => $LastName,
   'EmailAddress' => $EmailAddress,
   'Password' => $Password]);
        if($Insert==0){
         $validate="Registration Complete successfully Please Login";   
        }
        else{
             $validateError="Could not register try again later";
        }
        
        return view('users/userRegister', array(
            'message'=>$validate,
            'error'=>$validateError
        ));
       }

}
?>