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

Route::get('/', function () 
{
    return view('welcome');
});


Route::get('/home','PageController@home');

Route::get('/form','PageController@form');
Route::get('/aboutUs','PageController@aboutUs');
Route::get('/contactUs','PageController@contactUs');

Route::group(['middleware' => ['web']], function () 
{
  Route::get('/signin','Auth\AuthController@getLogin');
  Route::post('/signin','Auth\AuthController@postLogin');//Checking from database
  
  Route::get('/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);  
  Route::get('/aadharform','PageController@aadharform');
  //Registration Route
  Route::get('/createAccount',['as'=>'register','uses'=>'Auth\AuthController@getRegister']);
  Route::post('/createAccount','Auth\AuthController@postRegister');//Saving to database

});