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


Route::get('/', function()
{
	
	
	//$user = DB::table('users')->find(1);
	//$users = DB::table('users')->where('username', '!=', 'superuser')->get();
	//return $user->username;
	//return $users;
	
	
	
	return View::make('hello');
	
});

Route::get('overview', function()
{
	
	
	//$user = DB::table('users')->get(1);
	//$users = DB::table('users')->where('username', '!=', 'superuser')->get();
	//return $user->username;
	
	$user = "negerman";
	
	
	return View::make('overview')->with('user',$user);
	
});

Route::get('controllertest/', 'PagesController@home');
Route::get('about/', 'PagesController@about');
Route::get('bladetest/', 'PagesController@bladetest');
Route::get('eloquenttest/','PagesController@eloquenttest');