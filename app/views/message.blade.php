@extends('layouts.base')

@section('data')
<div class="row">
	<div class="col-lg-8 col-lg-offset2">
		<div class="panel panel-primary">
			<div class="panel-heading">Mensaje</div>
			<h3>
				{{ $mensaje }}
			</h3>
		</div>
	</div>
</div>
@stop