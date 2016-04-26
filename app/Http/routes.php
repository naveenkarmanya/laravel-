<?php


Route::get('/', function () {
    return view('welcome');
});




Route::get('/Counter',array(
    'as'=>'Counter',
    'uses'=>'counterController@home'
));



Route::get('user/home', array(
    'as'=>'home',
    'uses'=>'HomeController@home' ));
Route::post('user/login', array(
    'as'=>'login',
    'uses'=>'successController@login' ));
Route::post('user/registersubmit',array(
    'as'=>'registersubmit',
    'uses'=>'successController@success'
));

Route::get('dropdown',array(
    'as'=>'dropdown',
    'uses'=>'dropController@dropdown'
));
Route::post('search',array(
    'as'=>'search',
    'uses'=>'dropController@search'
));
