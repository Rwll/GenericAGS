@extends('layouts.admin-login')

@section('content')
	<div class="well col-md-6 col-md-offset-3" id="loginWell">
		<div class="row">
			<h2 class="col-md-8 col-md-offset-2">
				<i class="fa fa-user fa-fw"></i>
				Administrator
			</h2> 
					
		</div>
		<hr>
		@if($errors->has())
			<div class="alert alert-danger alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		{{ Form::open( array(
			'method'	=> 'post' , 
			'uses'		=> URL::Route('admin-login-execute')
			) ) }}

		<div class="form-group">
			{{ Form::label('username','Username:') }}
			{{ Form::text('username', Input::old('username'),array(
					'class'=>'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('password','Password:') }}
			<input name="password" type="password" class="form-control"/>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-sign-in fa-fw"></i> Login
			</button>
		</div>
		{{ Form::close() }}
	</div>
@stop