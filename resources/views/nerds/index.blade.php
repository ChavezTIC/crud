<!-- app/views/nerds/index.blade.php -->
@extends('layout.layout')

@section('content')

<h1>All the Nerds</h1>

<!-- Si hay mensajes aquí se muestran -->
@if(session('message'))
<div class="alert alert-success">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	{{ session('message') }}
</div>
@endif

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Email</td>
			<td>Nerd Level</td>
			<td>Actions</td>
		</tr>
	</thead>
	<tbody>
	@foreach($nerds as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->name }}</td>
			<td>{{ $value->email }}</td>
			<td>{{ $value->nerd_level }}</td>

			<!-- Botones para Ver, Editar y Eliminar -->
			<td>
				<!-- Eliminar -->
				{!! Form::open(array('url' => 'nerds/delete/' . $value->id, 'class' => 'pull-right')) !!}
					{!! Form::hidden('_method', 'DELETE') !!}
					{!! Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) !!}
				{!! Form::close() !!}
				
				<!-- Ver -->
				<a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a>

				<!-- Editar -->
				<a class="btn btn-small btn-info" href="{{ URL::to('nerds/edit/'. $value->id) }}">Edit this Nerd</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop