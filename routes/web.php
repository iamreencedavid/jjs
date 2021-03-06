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
Route::get('/contents/{content_id}', 'HomeController@get_content_info');
Route::get('/news/{news_id}', 'HomeController@get_news_info');
Route::get('/jobs/{job_id}', 'HomeController@get_job_info');
Route::post('/application/send-request', 'HomeController@send_request');


Route::get('/admin/login' , 'AdminController@login')->middleware('guest');

Route::get('users/login' , 'AdminController@users_signin');

//Back End Routes
Route::group(
	[
	'prefix' 	=> '/server/',
	'middleware' => 'authenticate'
	] , function(){

	Route::get('applicants' , 'AdminController@applicants');
	Route::get('applicants/archived' , 'AdminController@applicants_archived');
	Route::delete('applicants/archive/{applicant_id}', 'AdminController@archive_applicant');
	Route::delete('applicants/delete/{applicant_id}', 'AdminController@applicant_delete');

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
	Route::get('users/in-active' , 'AdminController@users_inactive');
	Route::get('users/create' , 'AdminController@users_create');
	Route::get('users/edit/{user_id}', 'AdminController@users_edit');
	Route::get('users/status/{user_id}/{status}', 'AdminController@users_set_status');
	Route::post('users/store', 'AdminController@users_store');
	Route::put('users/update/{user_id}', 'AdminController@users_update');
	Route::delete('users/delete/{user_id}', 'AdminController@users_delete');

	Route::get('users/signout' , 'AdminController@users_signout');

	Route::get('contents' , 'AdminController@contents');
	Route::get('contents/create' , 'AdminController@contents_create');
	Route::get('contents/edit/{content_id}', 'AdminController@contents_edit');
	Route::post('contents/store', 'AdminController@contents_store');
	Route::post('contents/update/{content_id}', 'AdminController@contents_update');
	Route::delete('contents/delete/{content_id}', 'AdminController@contents_delete');

	Route::get('settings' , 'AdminController@settings');
	Route::post('settings/store' , 'AdminController@settings_store');
});