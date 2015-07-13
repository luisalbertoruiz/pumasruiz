@extends('layout.main')
@section('title')
Editar Partido Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"></span> Editar Partido</h2>
		</div>
		<div class="panel-body">
			{{ Form::model($partido,array('method' => 'PATCH','url' => 'admin/partido/actualizar/'.$partido->id)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						{{ Form::label('equipo_id', 'Equipo') }}
						{{ Form::select('equipo_id', $equipos, null, array('class' => 'form-control','id'=>'equipo_id')) }}<br>
						{{ Form::label('torneo_id', 'Torneo') }}
						{{ Form::select('torneo_id', $torneos, null, array('class' => 'form-control','id'=>'torneo_id')) }}<br>
						{{ Form::label('cancha_id', 'Cancha') }}
						{{ Form::select('cancha_id', $canchas, null, array('class' => 'form-control','id'=>'cancha_id')) }}<br>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						{{ Form::label('dia', 'Día') }}
						{{ Form::text('dia',null, array('class' => 'form-control','id'=>'dia')) }}<br>
						{{ Form::label('horario', 'Horario') }}
						{{ Form::text('horario',null, array('class' => 'form-control','id'=>'horario')) }}<br>
						{{ Form::label('fecha', 'Fecha') }}
						{{ Form::number('fecha',null, array('class' => 'form-control','id'=>'fecha', 'min'=>'1','max'=>'32')) }}
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Actualizar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop