@extends('layout.main')
@section('title')
Editar Jugador {{ $jugador->nombre.' '.$jugador->apellido}} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"></span> Editar Jugador {{ $jugador->nombre.' '.$jugador->apellido}}</h2>
		</div>
		<div class="panel-body">
			{{ Form::model($jugador,array('method'=>'PUT', 'route' => array('admin.jugador.update', $jugador->id), 'files' => true)) }}
				@include('jugador.form')
				<button type="submit" class="btn btn-success pull-right">Actualizar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop