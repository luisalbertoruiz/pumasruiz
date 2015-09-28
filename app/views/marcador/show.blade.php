/@extends('layout.main')
@section('title')
{{ $marcador->nombre }} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"></span> Marcador</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>vs {{ $marcador->partido->equipo->nombre }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Goles a favor</td>
							<td>{{$marcador->goles_f}}</td>
						</tr>
						<tr>
							<td>Goles en contra:</td>
							<td>{{$marcador->goles_c}}</td>
						</tr>
						<tr>
							<td>Dia:</td>
							<td>{{$marcador->partido->dia}}</td>
						</tr>
						<tr>
							<td>Cancha:</td>
							<td>{{$marcador->partido->cancha->nombre}}</td>
						</tr>
						<tr>
							<td>Horario:</td>
							<td>{{$marcador->partido->horario}}</td>
						</tr>
						<tr>
							<td>Fecha:</td>
							<td>{{$marcador->partido->fecha}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop