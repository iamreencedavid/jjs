<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});


//Back End Routes
Route::group(
	[
	'prefix' 	=> '/server/'
	] , function(){

	Route::get('jobs' , 'AdminController@jobs');
	Route::get('jobs/create' , 'AdminController@jobs_create');

	Route::get('news' , 'AdminController@news');
	Route::get('news/create' , 'AdminController@news_create');
	Route::post('news/store', 'AdminController@news_store');
	

	Route::get('users' , 'AdminController@users');

	Route::get('settings' , 'AdminController@settings');
});