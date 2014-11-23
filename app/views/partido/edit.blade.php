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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"> Editar Partido</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/partido/actualizar/'.$partido->id)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="equipo">Equipo</label>
						<select name="equipo" id="equipo" class="form-control">
							<option value="{{$partido->equipo_id}}">{{$equipo->nombre}}</option>
							@foreach($equipos as $equipo)
								<option value="{{$equipo->id}}">{{ $equipo->nombre }}</option>
							@endforeach
						</select><br>
						<label for="torneo">Torneo</label>
						<select name="torneo" id="torneo" class="form-control">
							<option value="{{$partido->torneo_id}}">{{$torneo->nombre}}</option>
							@foreach($torneos as $torneo)
								<option value="{{$torneo->id}}">{{ $torneo->nombre }}</option>
							@endforeach
						</select><br>
						<label for="cancha">Cancha</label>
						<select name="cancha" id="cancha" class="form-control">
							<option>{{$partido->cancha}}</option>
							@foreach($canchas as $cancha)
								<option>{{$cancha->nombre}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
					<label for="dia">Dia</label>
						<input type="date" class="form-control" id="dia" name="dia" value="{{$partido->dia}}"><br>
						<label for="horario">Horario</label>
						<input type="time" class="form-control" id="horario" name="horario" value="{{$partido->horario}}"><br>
						<label for="fecha">Fecha</label>
						<input type="number" class="form-control" id="fecha" name="fecha" min="1" max="{{$torneo->fechas}}" value="{{$partido->fecha}}">
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Actualizar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop