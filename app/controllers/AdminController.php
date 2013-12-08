<?php

class AdminController extends BaseController {

	public function showLogin()
	{
		return View::make('admin.login')
			->with('title','Login');
	}		

	public function attempLogin()
	{
		$validation = User::validate(Input::all());

		if(!($validation->fails())){
			if(Auth::attempt(array(
				'username'	=> Input::get('username'),
				'password'	=> Input::get('password'),
				'role'		=> 'admin'
				))){
				return Redirect::Route('admin-dashboard');
			} else {
				return Redirect::Route('admin-login')
					->withErrors('Incorrect username or password')
					->withInput(Input::except('password'));
			}
		}else{
			return Redirect::Route('admin-login')
				->withErrors($validation)
				->withInput(Input::except('password'));
		}
	}

	public function attempLogout()
	{
		Auth::logout();
		if(Auth::guest()){
			return Redirect::Route('admin-login');
		}else {
			return Redirect::Route('admin-dashboard');
		}
	}

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
		$universities = University::get();

		return View::make('admin.universities')
			->with('title','Manage Universities')
			->with('universities',$universities);
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
