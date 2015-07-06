@extends('layout.main')
@section('title')
{{ $jugador->nombre.' '.$jugador->apellido}} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"> Jugador</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>{{ $jugador->nombre.' '.$jugador->apellido }}</th>
							<th>{{ HTML::image('src/fotos/'.$jugador->foto, "foto", array('id' => 'fotoshow', 'title' => $jugador->nombre.' '.$jugador->apellido)) }}</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sobrenombre:</td>
							<td>{{$jugador->sobrenombre}}</td>
						</tr>
						<tr>
							<td>Posición:</td>
							<td>{{$jugador->posicion}}</td>
						</tr>
						<tr>
							<td>Playera:</td>
							<td>{{$jugador->playera}}</td>
						</tr>
						<tr>
							<td>Teléfono:</td>
							<td>{{$jugador->telefono}}</td>
						</tr>
						<tr>
							<td>Celular:</td>
							<td>{{$jugador->celular}}</td>
						</tr>
						<tr>
							<td>Dirección:</td>
							<td>{{$jugador->direccion}}</td>
						</tr>
						<tr>
							<td>eMail:</td>
							<td>{{$jugador->email}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop