<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/////=========== Right180 Frontend routes start

Route::get('/', function()
{
	return View::make('hello');
});




/////============== Right180 Frontend routes end


/////=========== Right180 Admin routes start
Route::resource('admin/dashboard', 'AdminController');
Route::any('admin/login', ['as' => 'admin.login', 'uses' => 'AdminLoginController@index']);
Route::any('admin/forgot-password', ['as' => 'admin.forgotpassword', 'uses' => 'AdminLoginController@forgotpass']);
Route::post('admin/login', array('uses' => 'AdminLoginController@postlogin'));
//Route::any('admin/dashboard', ['as' => 'amin.dashboard' 'uses' => 'AdminController@index']);
//Route::resource('user', 'UserController');




/////============== Right180 Admin routes end