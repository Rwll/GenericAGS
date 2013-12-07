<?php

class Admin extends Eloquent {
	protected $guarded = array();
	
	protected $table = 'admins';

	public static $rules = array(
		'user_id'	=> 'required|alpha|unique:admins',
		'firstname'	=> 'required|alpha',
		'lastname'	=> 'required|alpha'
	);

	public static function validate($data){
		return Validator::make($data,self::$rules);
	}

}
