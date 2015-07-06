@extends('layout.main')
@section('title')
Partido Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"> Partido</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>vs {{ $equipo->nombre }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Torneo:</td>
							<td>{{$torneo->nombre}}</td>
						</tr>
						<tr>
							<td>cancha:</td>
							<td>{{$partido->cancha}}</td>
						</tr>
						<tr>
							<td>Dia:</td>
							<td>{{$partido->dia}}</td>
						</tr>
						<tr>
							<td>Horario:</td>
							<td>{{date('h:ia',strtotime($partido->horario))}}</td>
						</tr>
						<tr>
							<td>Fecha:</td>
							<td>{{$partido->fecha}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop