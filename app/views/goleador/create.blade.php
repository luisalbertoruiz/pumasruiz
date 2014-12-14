@extends('layout.main')
@section('title')
Nuevo Goleador Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-record"></span> Nuevos Goles</span></h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/goleador/guardar')) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="partido">Partido</label>
						<select name="partido" id="partido" class="form-control" required>
							<option value=""></option>
							@foreach($partidos as $partido)
								<option value="{{$partido->id}}">{{ $partido->nombre.' '.$partido->dia }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="jugador">Goleador</label>
						<select class="form-control" id="jugador" name="jugador" required>
							<option value=""></option>
							@foreach($jugadores as $jugador)
								<option value="{{$jugador->id}}">{{ $jugador->nombre.' '.$jugador->apellido }}</option>
							@endforeach
						</select><br>
						<label for="goles">Goles</label>
						<select class="form-control" id="goles" name="goles" required>
							<option value=""></option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Registrar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop