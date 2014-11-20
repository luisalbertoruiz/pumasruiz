@extends('layout.main')
@section('title')
{{ $torneo->nombre }} Pumas Ruiz F.C.
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbaradmin')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-calendar"> Torneo</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>{{ $torneo->nombre }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Fechas:</td>
							<td>{{$torneo->fechas}}</td>
						</tr>
						<tr>
							<td>Tipo:</td>
							<td>{{$torneo->tipo}}</td>
						</tr>
						<tr>
							<td>Competición:</td>
							<td>{{$torneo->competicion}}</td>
						</tr>
						<tr>
							<td>Enfrentamiento:</td>
							<td>{{$torneo->enfrentamiento}}</td>
						</tr>
						<tr>
							<td>F. Inicial:</td>
							<td>{{$torneo->finicio}}</td>
						</tr>
						<tr>
							<td>F. Final:</td>
							<td>{{$torneo->ffinal}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop