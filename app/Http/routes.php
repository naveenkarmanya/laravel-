<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@home' );

Route::get('/Counter',array(
    'as'=>'Counter',
    'uses'=>'counterController@home'
));



