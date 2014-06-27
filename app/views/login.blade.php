@extends('layouts.main')

@section('title')
Login
@stop

@section('content')
<div class="col-lg-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Login</div>
		<div class="panel-body">
			<form method="post" action="/login">
				<span>Usuario</span>
				<input type="text" name="usuario" class="form-control"></input>
				<br>
				<span>Contraseña</span>
				<input type="password" name="password" class="form-control"></input>
				<br>
				<button type="submit">Login</button>
			</form>
		</div>
	</div>
</div>
@stop
