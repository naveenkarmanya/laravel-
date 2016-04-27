<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class uploadController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function uploadimage() {
        return view('uploadimage');
    }

    public function register() {
        return view('users/register');
    }

    public function submit() {
        $FirstName = Input::get('firstname');
        $LastName = Input::get('lastname');
        $EmailAddress = Input::get('email');
        $Password = Input::get('password');
        $validateError = null;
        $validate = null;
        $Insert = DB::table('Forum')->insert(
                ['FirstName' => $FirstName,
                    'LastName' => $LastName,
                    'EmailAddress' => $EmailAddress,
                    'Password' => $Password]);
        if ($Insert == 1) {
            $validate = "Registration Complete successfully Please ";
        } else {
            $validateError = "Could not register try again later";
        }

        return view('users/Rigistersubmit', array(
            'message' => $validate,
            'error' => $validateError
        ));
    }

    public function Login() {

        $LoginEmailAddress = Input::get('login_email');
        $LoginPassword = Input::get('login_password');
        $validateError = null;
        $validate = null;
        $users = DB::table('Forum')->where('EmailAddress', $LoginEmailAddress)->where('Password', $LoginPassword)->get();

        if ($users) {

            return view("users/LoginSubmit", array(
                // "Details"=>$users
                'message' => 'Successfully Login'
            ));
        } else {
            return view('uploadimage', array(
                'error' => 'EmailAddress or Password Incorrect'
            ));
        }
    }

    public function createalbum() {
        return view('users/createalbum');
    }

}

?>