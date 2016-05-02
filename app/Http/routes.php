<?php

Route::get('/', function () {
    return view('welcome');
});




Route::get('/Counter', array(
    'as' => 'Counter',
    'uses' => 'counterController@home'
));



Route::get('user/home', array(
    'as' => 'home',
    'uses' => 'HomeController@home'));
Route::post('user/login', array(
    'as' => 'login',
    'uses' => 'successController@login'));
Route::post('user/registersubmit', array(
    'as' => 'registersubmit',
    'uses' => 'successController@success'
));

Route::get('dropdown', array(
    'as' => 'dropdown',
    'uses' => 'dropController@dropdown'
));
Route::post('search', array(
    'as' => 'search',
    'uses' => 'dropController@search'
));
Route::get('user/uploadimage', array(
    'as' => 'upload',
    'uses' => 'uploadController@uploadimage'
));

Route::get('user/register', array(
    'as' => 'register',
    'uses' => 'uploadController@register'
));
Route::post('user/submit', array(
    'as' => 'submit',
    'uses' => 'uploadController@submit'
));
Route::post('user/Login', array(
    'as' => 'Login',
    'uses' => 'uploadController@Login'
));
Route::get('user/createalbum', array(
    'as' => 'createalbum',
    'uses' => 'uploadController@createalbum'
));
Route::post('user/createsuccess', array(
    'as' => 'createsuccess',
    'uses' => 'uploadController@createsuccess'
));
Route::get('user/upload', array(
    'as' => 'image',
    'uses' => 'uploadController@image'
));
Route::post('user/uploads', array(
    'as' => 'imagesuccess',
    'uses' => 'uploadController@imagesuccess'
));

Route::post('user/upload', 'uploadController@search123'
);

Route::get('user/myalbum', array(
    'as' => 'myalbum',
    'uses' => 'uploadController@myalbum'
));
Route::get('user/about', array(
    'as' => 'about',
    'uses' => 'uploadController@about'
));
Route::get('spellchecker', 'counterController@spellcheck');
Route::post('checkspelling', 'counterController@checkspelling'
);

