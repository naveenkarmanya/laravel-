@extends('layout.main')
@include('layout.navigation')
@section('content')
Home ...sweet Home.
@stop


<?php
 $users = DB::table('Forum')->get();

 echo "<pre>",print_r($users),"</pre>";
     
 
 
 
    
?>  