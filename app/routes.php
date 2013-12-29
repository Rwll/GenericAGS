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

Route::get('/',array(
	'as'	=>	'home',
	'uses'	=>	'HomeController@showWelcome'
));

Route::group(array('before' => 'guest'),function(){

	Route::get('admin/login',array(
		'as'	=>	'admin-login',
		'uses'	=>	'AdminController@showLogin'
	));
	Route::post('admin/login',array(
		'as'	=>	'admin-login-execute',
		'uses'	=>	'AdminController@attempLogin'
	));

});


Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'),function(){
	
	Route::get('logout',array(
		'as'	=>	'admin-logout',
		'uses'	=>	'AdminController@attempLogout'
	));

	Route::get('dashboard',array(
		'as'	=>	'admin-dashboard',
		'uses'	=>	'AdminController@showDashboard'
	));

	Route::get('conversations',array(
		'as'	=>	'admin-conversations',
		'uses'	=>	'AdminController@showConversations'
	));

	Route::group(array('prefix' => 'manage'),function(){
		Route::get('universities',array(
			'as'	=>	'admin-universities',
			'uses'	=>	'AdminController@manageUniversities'
		));

		Route::get('alumni',array(
			'as'	=>	'admin-alumni',
			'uses'	=>	'AdminController@manageAlumni'
		));

		Route::get('administrators',array(
			'as'	=>	'admin-administrators',
			'uses'	=>	'AdminController@manageAdministrators'
		));
	});

	Route::get('statistics',array(
		'as'	=>	'admin-statistics',
		'uses'	=>	'AdminController@showStatistics'
	));

	Route::get('broadcasts',array(
		'as'	=>	'admin-broadcasts',
		'uses'	=>	'AdminController@showBroadcasts'
	));

});

/*
|
|	Routes for Api that requires administrative access
|
*/
Route::group(array('prefix' => 'api', 'before' => 'auth'),function(){

	Route::get('university/{id}', array(
		'as' => 'api-getUniversity',
		'uses' => 'ApiController@getUniversity'
	));

	Route::get('universities', array(
		'as' => 'api-universities',
		'uses' => 'ApiController@getUniversities'
	));

	Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'),function(){

		Route::post('university/update', array(
			'as' => 'api-updateUniversity',
			'uses' => 'ApiController@updateUniversity'
		));

		Route::post('university/add', array(
			'as' => 'api-addUniversity',
			'uses' => 'ApiController@addUniversity'
		));

		

	});
});


