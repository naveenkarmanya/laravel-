<?php

Route::get('/', function () {
    return view('welcome');
});


//Hit counter ----------------------------------------------------------------------------

Route::get('/Counter', array(
    'as' => 'Counter',
    'uses' => 'counterController@home'
));

//Practice userlogin page -------------------------------------------------------------------
// email send......------------------------------------------------------------------
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

//dropdown autosuggest------------------------------------------------------------------

Route::get('dropdown', array(
    'as' => 'dropdown',
    'uses' => 'dropController@dropdown'
));
Route::post('search', array(
    'as' => 'search',
    'uses' => 'dropController@search'
));
//Upload images ..........................................................................

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

// spellcheck-----------------------------------------------------------------------

Route::get('spellchecker', 'counterController@spellcheck');
Route::post('checkspelling', 'counterController@checkspelling');
//GuestBook--------------------------------------------------------------------------

Route::get('guestbook', 'counterController@guest');
Route::post('guestbook', array(
    'as' => 'guestbook',
    'uses' => 'counterController@guestbook'
));

// Chat Application -----------------------------------------------------------------

Route::get('chatbox/{name}', array(
    'as' => 'chatbox',
    'uses' => 'counterController@chat'));
Route::post('chatsubmit', array(
    'as' => '/chatsubmit',
    'uses' => 'counterController@chatsubmit'
));
Route::post('getchat', array(
    'as' => '/getchat',
    'uses' => 'counterController@getchat'
));

// Templateengine----------------------------------------------------------------------

Route::get('templateengine', 'TemplateengineController@home');

// Currencyconverter-------------------------------------------------------------------

Route::get('currencyConvereter', 'currencyController@index');
Route::post('currencyConvereter', array(
    'as' => 'currencyconverter',
    'uses' => 'currencyController@converter'
));

// find and replace-------------------------------------------------------------------

Route::get('findandreplace', 'findreplaceController@home');
Route::post('findandreplace', array(
    'as' => 'findandreplace',
    'uses' => 'findreplaceController@index'
));
//multiplefile upload--------------------------------------------------------------------

Route::get('multipleupload', 'multipleController@index');
Route::post('multipleupload', array(
    'as' => 'multiple',
    'uses' => 'multipleController@multipleFile'
));

//secure file upload--------------------------------------------------------------------

Route::get('securefileupload', 'securefileController@index');
Route::post('securefileupload', array(
    'as' => 'secure',
    'uses' => 'securefileController@uploadFiles'
));

//Web Site UporDown------------------------------------------------------------------------

Route::get('websiteupordown', 'counterController@websiteupordown');
Route::post('websiteupordown', array(
    'as' => 'upordown',
    'uses' => 'counterController@upordown'
));
//Photo Album-----------------------------------------------------------------------

Route::get('photoalbum', 'counterController@album');
Route::get('photoalbum', array(
    'as' => 'photoalbum',
    'uses' => 'counterController@album'));
Route::get('folder/{folder}', array(
    'as' => 'folder',
    'uses' => 'counterController@folder'));

// Translate Language--------------------------------------------------------------

Route::get('translate/{language}', array(
   "as" => 'translate',
   'uses' => 'counterController@translate'
));

Route::get('translatepage', array(
   "as" => 'translatepage',
   'uses' => 'counterController@main'
));
Route::any('menu/{language}',array(
   'as'=>'menu',
    'uses'=>'counterController@menu'));

//cross site -------------------------------------------------------------------------

Route::get('crosssite', 'counterController@index');
Route::get('csrf{$message}', 'counterController@indexsecond');

Route::post('csrf',array(
   'as'=>'csrf',
    'uses'=>'counterController@csrf'));
Route::get('csrf{$token}', 'counterController@check');
//Mini Shopping Cart-------------------------------------------------------------------------

Route::get('minishoppingcart', 'counterController@shoppingcart');
Route::post('shoppingcart',array(
   'as'=>'cart',
    'uses'=>'counterController@cart'));
Route::post('shoppingcart123',array(
   'as'=>'cartupdate',
    'uses'=>'counterController@cartupdate'));
Route::get('editsubmit',array(
   'as'=>'editsubmit',
    'uses'=>'counterController@editsubmit'));
Route::get('deletesubmit',array(
   'as'=>'deletesubmit',
    'uses'=>'counterController@deletesubmit'));
//Mailing List--------------------------------------------------------------------------

Route::get('mailinglist',array(
    'as'=>'mailinglist',
    'uses'=>'mailinglistController@mailinglist'
));
Route::post('maillistsubmit',array(
    'as'=>'maillistsubmit',
    'uses'=> 'mailinglistController@maillistsubmit'));

//Dynamic RSS-----------------------------------------------------------------------------


Route::get('dynamicrss', 'counterController@dynamicrss');

//URL Shorten----------------------------------------------------------------------------

Route::get('UrlShorten','UrlController@index');
Route::post('shorten','UrlController@shorten');
