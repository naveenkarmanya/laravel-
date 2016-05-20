<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Mail;
use URL;
use Illuminate\Support\Facades\DB;
use App\cards;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;


class cardController extends Controller{

   
    
public function cards(){
    
    
//    Mail::send('emails.auth.test',array('name'=>'naveen'), function($message){
//        $message->to('pawankumar.s@karmanya.co.in','naveen')->subject('test mail');
//    });
//    
   $User= DB::table('cards')->select(['CardName','idcards'])->get();
  
    return view('Practice/cards',  compact('User'));
    
    
}
public function show($id)

{
   
//    $card= DB::table('cards')
//            ->join('Note','cards.idcards','=','Note.idcards')
//            ->select('cards.idcards','cards.CardName','Note.body')->where('idcards',$id)
//            ->get();
    $cards=DB::table('cards')->select('CardName')->where('idcards',$id)->get();
         $card=DB::table('Note')->select('body')->where('idcards',$id)->get();
   //dd($card);exit;
   //return $card;
     return view('Practice/show',compact('card','cards','id'));
//   return $card;
}
public function note()

{
//$note=new note;
//$note->body=$request->body;
//$card->notes()->save($note);

 $body=  Input::get('body'); 
$id1=Input::get('id') ;
//echo $id1;
    $note= DB::table('Note')->insert(
            [
                'body'=>$body,
                'idcards'=>$id1
            ]);
    
 $obj=new cardController();
 return $obj->show($id1);
    
// return Redirect::route('Practice/note', ['note' => $note]);
}

public function update()

{


 $body=  Input::get('body'); 
$id1=Input::get('id') ;
//echo $id1;
    $update= DB::table('Note')->update(
            [
                'body'=>1
            ]);
    
// $obj=new cardController();
// return $obj->note();
//    var_dump($update);
    
 return view('Practice/edit', ['update' => $update]);
}

 
}