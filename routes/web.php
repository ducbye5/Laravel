<?php
Auth::routes();



									//FRONTEND



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
//login
Route::post('','LayoutController@index');
Route::group(array('prefix'=>'index','middleware'=>'V_index'),function(){
	Route::get('', function () {
	    return view('frontend.layout');
	});
	//logout
	Route::get('logout','LayoutController@logout');



	//toeic
	Route::get('toeic','frontend\ToeicController@index');



	//test toeic
	//part5
	Route::get('toeic/test/{part}/{id}','frontend\TestToeicController@index');
});






									//BACKEND





//login
Route::get('login','HomeController@viewlogin');
Route::post('login','HomeController@login');
Route::group(array('prefix'=>'admin','middleware'=>'test'),function(){
	//logout
	Route::get('logout','homeController@logout');

	//layout
	Route::get('layout','backend\LayoutController@layout');

	//404
	Route::get('PageNotFould',function(){
		return view('error.404');
	});


							//News
	//list
	Route::get('news','backend\NewsController@list');
	//add
	Route::get('news/add','backend\NewsController@add');
	//do add
	Route::post('news/add','backend\NewsController@do_add');
	//edit
	Route::get('news/edit/{id}','backend\NewsController@edit')->middleware('check_news');
	//do edit
	Route::post('news/edit/{id}','backend\NewsController@do_edit');
	//delete
	Route::get('news/delete/{id}','backend\NewsController@delete')->middleware('check_news');



							//Adminstrator
	//list
	Route::get('adminstrator','backend\AdminstratorController@list');
	//information
	Route::get('adminstrator/profile/{id}','backend\AdminstratorController@profile');
	//add
	Route::get('adminstrator/add','backend\AdminstratorController@add')->middleware('check_admin_add');
	//do add
	Route::post('adminstrator/add','backend\AdminstratorController@do_add');
	//edit
	Route::get('adminstrator/edit/{id}','backend\AdminstratorController@edit')->middleware('check_admin_edit');
	//do edit
	Route::post('adminstrator/edit/{id}','backend\AdminstratorController@do_edit');
	//delete
	Route::get('adminstrator/delete/{id}','backend\AdminstratorController@delete')->middleware('check_admin_delete');



							//Toeic

	//list question
	Route::get('toeic','backend\ToeicController@list');
	//download question
	Route::get('toeic/download','backend\ToeicController@download_question');
	//add question
	Route::get('toeic/add','backend\ToeicController@add_question');
	//do add question
	Route::post('toeic/add','backend\ToeicController@do_add_question');
});
