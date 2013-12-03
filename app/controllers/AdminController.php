<?php

class AdminController extends BaseController {

	
	public function showDashboard()
	{
		return View::make('admin.dashboard')
			->with('title','Dashboard');
	}

	public function showConversations()
	{
		return View::make('admin.conversations')
			->with('title','Conversations');
	}

	public function manageUniversities()
	{
		return View::make('admin.universities')
			->with('title','Manage Universities');
	}

	public function manageAlumni()
	{
		return View::make('admin.alumni')
			->with('title','Manage Alumni');
	}

	public function manageAdministrators()
	{
		return View::make('admin.administrators')
			->with('title','Manage Administrators');
	}

	public function showStatistics()
	{
		return View::make('admin.statistics')
			->with('title','Statistics');
	}

	public function showBroadcasts()
	{
		return View::make('admin.broadcasts')
			->with('title','Broadcasts');
	}
}
