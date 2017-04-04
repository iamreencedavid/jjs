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

	Route::get('jobs' , 'AdminController@index');
	Route::get('jobs/create' , 'AdminController@create');
});