<!-- app/views/nerds/create.blade.php -->

@extends('layout.layout')

@section('content')

<h1>Create a Nerd</h1>

<!-- Si hay errores al crear aquí se muestran -->
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

{!! Form::open(array('url' => 'nerds')) !!}

	<div class="form-group">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nerd_level', 'Nerd Level') !!}
		{!! Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), Input::old('nerd_level'), array('class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

@stop