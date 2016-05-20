<?php

Route::get('/', function () {
    return view('welcome');
});


//Hit counter ----------------------------------------------------------------------------
//------------------------------------------------------------------------------------------

Route::get('/Counter', array(
    'as' => 'Counter',
    'uses' => 'counterController@home'
));

//Practice userlogin page -------------------------------------------------------------------
// email send......------------------------------------------------------------------
//--------------------------------------------------------------------------------------------

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
//-------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------

Route::get('dropdown', array(
    'as' => 'dropdown',
    'uses' => 'dropController@dropdown'
));
Route::post('search', array(
    'as' => 'search',
    'uses' => 'dropController@search'
));
//Upload images ..........................................................................
//---------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------

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

Route::get('user/myimages/{images}', array(
    'as' => 'myimages',
    'uses' => 'uploadController@myimages'));
Route::get('folder/{folder}', array(
    'as' => 'folder',
    'uses' => 'uploadController@folder'));

Route::get('user/about', array(
    'as' => 'about',
    'uses' => 'uploadController@about'
));

// spellcheck-----------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

Route::get('spellchecker', 'counterController@spellcheck');
Route::post('checkspelling', 'counterController@checkspelling');
//GuestBook--------------------------------------------------------------------------

Route::get('guestbook', 'counterController@guest');
Route::post('guestbook', array(
    'as' => 'guestbook',
    'uses' => 'counterController@guestbook'
));

// Chat Application -----------------------------------------------------------------
//-------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------

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
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------

Route::get('templateengine', 'TemplateengineController@home');

// Currencyconverter-------------------------------------------------------------------
//------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------

Route::get('currencyConvereter', 'currencyController@index');
Route::post('currencyConvereter', array(
    'as' => 'currencyconverter',
    'uses' => 'currencyController@converter'
));

// find and replace-------------------------------------------------------------------
//---------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get('findandreplace', 'findreplaceController@home');
Route::post('findandreplace', array(
    'as' => 'findandreplace',
    'uses' => 'findreplaceController@index'
));
//multiplefile upload--------------------------------------------------------------------
//----------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------

Route::get('multipleupload', 'multipleController@index');
Route::post('multipleupload', array(
    'as' => 'multiple',
    'uses' => 'multipleController@multipleFile'
));

//secure file upload--------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------

Route::get('securefileupload', 'securefileController@index');
Route::post('securefileupload', array(
    'as' => 'secure',
    'uses' => 'securefileController@uploadFiles'
));

//Web Site UporDown------------------------------------------------------------------------
//-------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------

Route::get('websiteupordown', 'counterController@websiteupordown');
Route::post('websiteupordown', array(
    'as' => 'upordown',
    'uses' => 'counterController@upordown'
));
//Photo Album-----------------------------------------------------------------------
//--------------------------------------------------------------------------------
//--------------------------------------------------------------------------------

Route::get('photoalbum', 'counterController@album');
Route::get('photoalbum', array(
    'as' => 'photoalbum',
    'uses' => 'counterController@album'));
Route::get('folder/{folder}', array(
    'as' => 'folder',
    'uses' => 'counterController@folder'));

// Translate Language--------------------------------------------------------------
//---------------------------------------------------------------------------------
//------------------------------------------------------------------------------------

Route::get('translate/{language}', array(
    "as" => 'translate',
    'uses' => 'counterController@translate'
));

Route::get('translatepage', array(
    "as" => 'translatepage',
    'uses' => 'counterController@main'
));
Route::any('menu/{language}', array(
    'as' => 'menu',
    'uses' => 'counterController@menu'));

//cross site -------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get("/crosssite", 'counterController@index');
Route::post('Csrf', array(
    "as" => 'csrf',
    'uses' => 'counterController@csrf'
));
Route::get('csrfprocess/{message}', array(
    'as' => 'csrfprocess',
    'uses' => 'counterController@indexsecond'
));

//Mini Shopping Cart-------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------

Route::get('MinishoppingCart', 'counterController@shoppingcart');
Route::post('shoppingcart', array(
    'as' => 'cart',
    'uses' => 'counterController@cart'));
Route::post('shoppingcart123', array(
    'as' => 'cartupdate',
    'uses' => 'counterController@cartupdate'));
Route::get('editsubmit', array(
    'as' => 'editsubmit',
    'uses' => 'counterController@editsubmit'));
Route::get('deletesubmit', array(
    'as' => 'deletesubmit',
    'uses' => 'counterController@deletesubmit'));
//Mailing List--------------------------------------------------------------------------
//----------------------------------------------------------------------------------
//---------------------------------------------------------------------------------

Route::get('mailinglist', array(
    'as' => 'mailinglist',
    'uses' => 'mailinglistController@mailinglist'
));
Route::post('maillistsubmit', array(
    'as' => 'maillistsubmit',
    'uses' => 'mailinglistController@maillistsubmit'));

//Dynamic RSS-----------------------------------------------------------------------------
//---------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------


Route::get('dynamicrss', 'counterController@dynamicrss');

//URL Shorten----------------------------------------------------------------------------
//-------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------

Route::get('UrlShorten', 'UrlController@index');
Route::post('shorten', 'UrlController@shorten');

//BBCODE---------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//----------------------------------------------------------------------------

Route::get('bbcode', 'bbcodeController@bbcode');

//Shout Box--------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//----------------------------------------------------------------------------

Route::get('shoutbox', array(
    'as' => 'shoutbox',
    'uses' => 'shoutboxController@shoutbox'));
Route::post('shoutboxsubmit', array(
    'as' => 'shoutboxsubmit',
    'uses' => 'shoutboxController@shoutboxsubmit'));

//MiniShopping Cart---------------------------------------------------------------------
//---------------------------------------------------------------------------------
//----------------------------------------------------------------------------


Route::get('minishoppingcart', array(
    'as' => 'minishoppingcart',
    'uses' => 'likebuttonController@shoppingcart'
));
Route::post('addtocart', array(
    'as' => 'addtocart',
    'uses' => 'likebuttonController@addcart'
));
Route::post('checkcart', 'likebuttonController@checkcart');
Route::post('checkout', array(
    'as' => 'checkout',
    'uses' => 'likebuttonController@checkout'
));
Route::get('incrementproduct/{id}', array(
    'as' => 'incrementproduct',
    'uses' => 'likebuttonController@addproduct'
));

Route::get('decrementproduct/{id}', array(
    'as' => 'decrementproduct',
    'uses' => 'likebuttonController@deductproduct'
));
Route::get('deleteproduct/{id}', array(
    'as' => 'deleteproduct',
    'uses' => 'likebuttonController@deleteproduct'
));
Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'likebuttonController@payment'
));
Route::post('paid', array(
    'as' => 'paid',
    'uses' => 'likebuttonController@paid'
));

//Like Button---------------------------------------------------------------------
//---------------------------------------------------------------------------------
//----------------------------------------------------------------------------

Route::get('LikeButton', array(
    'as' => 'LikeButton',
    'uses' => 'LikeController@index'));
Route::get('countlike', array(
    'as' => 'countlike',
    'uses' => 'LikeController@countlike'));
Route::post('like_add', 'LikeController@like_add');
Route::post('like_get', 'LikeController@like_get');

// Website Rating System------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//----------------------------------------------------------------------------


Route::get('/WebsiteRating', array(
    'as' => 'websiteindex',
    'uses' => 'WebsiteRateController@index'
));
Route::get('/WebsiteRating/{item}/{rating}/{limit}', array(
    'as' => 'rating',
    'uses' => 'WebsiteRateController@rating'
));

//search Engine-----------------------------------------------------------------------
//---------------------------------------------------------------------------------
//----------------------------------------------------------------------------


Route::get('searchengine', array(
    'as' => 'searchengine',
    'uses' => 'TemplateengineController@search'
));
Route::post('searchengine/result', array(
    'as' => 'searchenginesubmit',
    'uses' => 'TemplateengineController@searchengine'
));



//laravel practice ----fetching data-------------------
//----------------------------------------------------------------------

Route::get('/fetchdata',function(){
    
    $people=['naveen','pawan','kumar'];
    return view('Practice/Fetchdata',compact('people'));
    
});
Route::get('cards','cardController@cards');
//    return view('Practice/cards');
    Route::get('cards/{card}','cardController@show');
    Route::post('cards',array(
        'as'=>'addnote',
        'uses'=>'cardController@note'
        ));
    Route::get('edit','cardController@update');
    
    


    