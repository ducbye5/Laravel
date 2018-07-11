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
    return view('welcome');
});

Route::get('login','HomeController@viewLogin');
Route::post('login','HomeController@login');


Route::group(array('prefix'=>'admin','middleware'=>'Admin'),function()
{
	// dashboard
	Route::get('', 'backend\LayoutController@index');
	// logout
	Route::get('logout', 'HomeController@logout');
	

				//user

	//list
	Route::get('user','backend\UserController@index');
	//profile
	Route::get('user/profile/{id}','backend\UserController@viewProfile');
	//create
	Route::get('user/create','backend\UserController@viewCreate');
	//do create
	Route::post('user/create','backend\UserController@create');
	//edit 
	Route::get('user/edit/{id}','backend\UserController@viewEdit');
	//do edit
	Route::post('user/edit/{id}','backend\UserController@edit');
	//delete
	Route::get('user/delete/{id}','backend\UserController@delete');
});
