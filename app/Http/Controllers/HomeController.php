<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Mail;
use URL;

class HomeController extends Controller{
   
    
public function home(){
    
    
    //Mail::send('emails.auth.test',array('name'=>'naveen'), function($message){
       // $message->to('pawankumar.s@karmanya.co.in','naveen')->subject('test mail');
    //});
    
    return view('home');
    
    
}


 
}