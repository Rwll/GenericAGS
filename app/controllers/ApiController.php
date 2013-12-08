<?php

class ApiController extends BaseController {

	
	public function getUniversity($id)
	{
		return Response::json(array(
			'error'	=>	false,
			'data'	=>	University::find($id)->toArray()),
			200
		);
	}

	public function updateUniversity()
	{
		$validation = University::validate(Input::all());

		if($validation->fails()){
			return Response::json(array(
				'error'	=>	true,
				'data'	=>	$validation->errors()->toarray()),
				400
			);
		}else{
			$umak = University::find(Input::get('id'));
			$umak->abbreviation = Input::get('abbreviation');
			$umak->name = Input::get('name');
			$umak->email = Input::get('email');
			$umak->contact = Input::get('contact');
			$umak->address = Input::get('address');
			$umak->website = Input::get('website');
			$umak->description = Input::get('description');
			$umak->save();

			return Response::json(array(
				'error'	=>	false,
				'data'	=>	$validation->errors()->toarray()),
				200
			);
		}
	}
}
