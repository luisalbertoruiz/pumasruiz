@extends('layout.main')
@section('title')
Editar Goleo Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-record"></span> Nuevo Marcadores</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/goleador/actualizar/'.$goleador->id)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="partido">Partido</label>
						<input type="text" name="partido" id="partido" class="form-control" required value="{{ $equipo->nombre.' '.$partido->dia }}" disabled>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="goleador">Goleador</label>
						<input type="text" class="form-control" id="goleador" name="goleador" required value="{{ $jugador->nombre.' '.$jugador->apellido }}" disabled>
						<br>
						<label for="goles">Goles</label>
						<select class="form-control" id="goles" name="goles" required>
							<option>{{$goleador->goles}}</option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>
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