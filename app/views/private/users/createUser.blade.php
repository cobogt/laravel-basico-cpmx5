@extends('layouts.base')

@section('title')
Crear usuario
@stop

@section('data')
<p>
<div class="col-lg-6">
<div class="panel panel-primary">
	<div class="panel-heading">Crear usuario</div>
	<div class="panel-body">
		<form action="/newUser" method="post">
			<p>Nombre del nuevo usuario</p>
			<input type="text" name="newUser" placeholder="Mi nuevo usuario..." class="form-control"></input>
			<br>
			<p>Constraseña del nuevo usuario</p>
			<input type="text" name="newPassword" placeholder="Mi nuevo pass..." class="form-control"></input>
			<br>
			<button type="submit">Crear usuario!!</button>
		</form>
		</div>
</div>
</div>
</p>
@stop