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

Route::get('/', 'HomeController@index');
Route::post('/application/send-request', 'HomeController@send_request');

//Back End Routes
Route::group(
	[
	'prefix' 	=> '/server/'
	] , function(){

	Route::get('jobs' , 'AdminController@jobs');
	Route::get('jobs/create' , 'AdminController@jobs_create');
	Route::get('jobs/edit/{job_id}', 'AdminController@jobs_edit');
	Route::post('jobs/store', 'AdminController@jobs_store');
	Route::put('jobs/update/{job_id}', 'AdminController@jobs_update');
	Route::delete('jobs/delete/{job_id}', 'AdminController@jobs_delete');

	Route::get('news' , 'AdminController@news');
	Route::get('news/create' , 'AdminController@news_create');
	Route::get('news/edit/{news_id}', 'AdminController@news_edit');
	Route::post('news/store', 'AdminController@news_store');
	Route::post('news/update/{news_id}', 'AdminController@news_update');
	Route::delete('news/delete/{news_id}', 'AdminController@news_delete');

	Route::get('users' , 'AdminController@users');

	Route::get('settings' , 'AdminController@settings');
});