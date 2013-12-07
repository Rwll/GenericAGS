@extends('layouts.admin-login')

@section('content')
	<h1>login</h1>
	@if($errors->has())
		<ul>
			{{ $errors->first('username','<li>:message</li>')}}
			{{ $errors->first('password','<li>:message</li>')}}
		</ul>
	@endif
	<div class="well col-md-6 col-md-offset-3">

		{{ Form::open( array(
			'method'	=> 'post' , 
			'uses'		=> URL::Route('admin-login-execute')
			) ) }}

		<label>Username:</label>
		<input name="username" type="text" class="form-control"/>
		<br>
		<label>Password:</label>
		<input name="password" type="password" class="form-control"/>

		{{ Form::submit('Login') }}

		{{ Form::close() }}
	</div>
@stop