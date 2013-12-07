<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddAdminDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$user = new User;
		$user->username = 'alex';
		$user->email = 'alexdelossantos_official@yahoo.com';
		$pass = Hash::make('alex');
		$user->password = $pass;
		$user->role = 'admin';
		$user->save();

		$admin = new Admin;
		$admin->user_id = 1;
		$admin->firstname = 'alexander';
		$admin->lastname = 'delos santos';
		$admin->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		User::destroy(1);
	}

}
