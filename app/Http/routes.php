<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','PageController@home');
Route::get('/home','PageController@home');
Route::get('/form','PageController@form');
Route::get('/aboutUs','PageController@aboutUs');
Route::get('/contactUs','PageController@contactUs');

Route::group(['middleware' => ['web']], function () 
{	
  //Login Route	
  Route::get('/signin',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
  Route::post('/signin','Auth\AuthController@postLogin');//Checking from database
  Route::get('/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);  
  //Admin route
  Route::get('/admin','PageController@admin');



  //Registration Route
  Route::get('/createAccount',['as'=>'register','uses'=>'Auth\AuthController@getRegister']);
  Route::post('/createAccount','Auth\AuthController@postRegister');//Saving to database


  Route::get('/aadharform','PageController@aadharform');

  //New Routes For updating info of user
  Route::get('/edituser', 'UserController@create');
  Route::get('/edituser/{id}','UserController@update');//passing the current loggedin userid
});