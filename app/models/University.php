<?php

class University extends Eloquent {
	protected $guarded = array();
	protected $table = 'universities';

	public static $rules = array(
		'name'			=>	'required',
		'abbreviation'	=>	'max:8',
		'email'			=>	'required',
		'contact'		=>	'required',
		'website'		=>	'',
		'address'		=>	'required',
		'description'	=>	''
	);

	public static function validate($data){
		return Validator::make($data,self::$rules);
	}
}
