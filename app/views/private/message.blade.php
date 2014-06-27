@extends('layouts.base')

@section('title')
{{ $title }}
@stop

@section('data')
<p>
<div class="row">
	<div class="col-lg-6 col-lg-offset2">
	<div class="panel-body">
		<div class="panel panel-primary">
			<div class="panel-heading">Mensaje</div>
			<h3>
				<p>
				{{ $mensaje }}
				</p>
			</h3>
		</div>
	</div>
	</div>
</div>
</p>
@stop