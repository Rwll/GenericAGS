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
	return View::make('admin.dashboard')->with('title','sa');
});

Route::group(array('prefix' => 'admin'),function(){
	
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