@extends('layouts.base')

@section('title')
Lista de usuarios
@stop

@section('data')
<p>
<div class="col-lg-6">
<div class="panel panel-primary">
	<div class="panel-heading">Lista de usuarios</div>
	<div class="panel-body">
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($usuarios as $usuario)
			<tr>
				<td>{{ $id++ }}</td>
				<td>{{ $usuario -> usuario }}</td>
				<td><a href="{{ URL::to('/')}}/borrarUsuario/{{ $usuario -> id }}"><img src="{{ URL::to('/') }}/img/delete.png" alt=""></a></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
	</div>
</div>
</div>
</p>
@stop