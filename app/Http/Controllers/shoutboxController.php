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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class shoutboxController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    
public function shoutbox(){
 
    $array=DB::table('shoutbox')->get();
    return view('users/shoutbox',['array'=>$array]);
}
public function shoutboxsubmit(){
    
    
    $name=Input::get('name');
    $message=Input::get('message');
    echo $name;
    $query=DB::table('shoutbox')->insert(['name'=>$name,'message'=>$message]);
    //print_r($query);
    return Redirect::route('shoutbox');
}

}

?>