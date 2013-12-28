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
				200
			);
		}else{
			$univ = University::find(Input::get('id'));
			$univ->abbreviation = Input::get('abbreviation');
			$univ->name = Input::get('name');
			$univ->email = Input::get('email');
			$univ->contact = Input::get('contact');
			$univ->address = Input::get('address');
			$univ->website = Input::get('website');
			$univ->description = Input::get('description');
			$univ->save();

			return Response::json(array(
				'error'	=>	false,
				'data'	=>	$validation->errors()->toarray()),
				200
			);
		}
	}

	public function addUniversity()
	{
		$validation = University::validate(Input::all());

		if($validation->fails()){
			return Response::json(array(
				'error'	=>	true,
				'data'	=>	$validation->errors()->toarray()),
				400
			);
		}else{
			$univ = new University();
			$univ->abbreviation = Input::get('abbreviation');
			$univ->name = Input::get('name');
			$univ->email = Input::get('email');
			$univ->contact = Input::get('contact');
			$univ->address = Input::get('address');
			$univ->website = Input::get('website');
			$univ->description = Input::get('description');
			$univ->save();

			return Response::json(array(
				'error'	=>	false,
				'data'	=>	$validation->errors()->toarray()),
				200
			);
		}
	}

	public function getUniversities()
	{
		$universities = University::get();

		return Response::json(array(
			'error'	=>	false,
			'data'	=>	$universities->toarray()),
			200
		);
	}
}
