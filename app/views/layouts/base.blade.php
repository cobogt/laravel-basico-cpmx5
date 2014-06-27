@extends('layouts.main')

@section('content')
<div class="row">
<div class="col-lg-2">
	<table class="table table-hover">
		<thead>
			<tr><th>CPMX5</th></tr>
		</thead>
		<tbody>
			<tr><td><a href="/crearUsuario">Crear usuario</a></td></tr>
			<tr><td><a href="/listaUsuarios">Ver lista de usuarios</a></td></tr>
			<tr><td><a href="/logout">Cerrar sesión</a></td></tr>
		</tbody>
	</table>
	</ul>
</div>
<div class="col-lg-10">
@yield('data')
</div>
</div>
@stop