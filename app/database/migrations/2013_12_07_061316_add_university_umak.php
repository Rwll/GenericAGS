<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddUniversityUmak extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$umak = new University;
		$umak->abbreviation = "UMAK";
		$umak->name = "University of Makati";
		$umak->email = "umak@umak.com";
		$umak->contact = "7510595";
		$umak->address = "West Rembo, Makati";
		$umak->description = "THe F";
		$umak->save();
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		University::destroy(1);
	}

}
