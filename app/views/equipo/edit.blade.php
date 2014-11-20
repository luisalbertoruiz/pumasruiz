@extends('layout.main')
@section('title')
Editar {{ $equipo->nombre }} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-flag"> Editar Equipo</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/equipo/actualizar/'.$equipo->id, 'files' => true)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required value="{{ $equipo->nombre }}"><br>
						<label for="sobrenombre">Sobrenombre</label>
						<input type="text" class="form-control" id="sobrenombre" name="sobrenombre" maxlength="30" required value="{{ $equipo->sobrenombre }}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="division">División</label>
						<select name="division" id="division" class="form-control" value="{{ $equipo->division }}">
							<option>{{ $equipo->division }}</option>
							<option value="Primera Especial">Primera Especial</option>
							<option value="Primera">Primera</option>
							<option value="Segunda">Segunda</option>
						</select><br>
						<label for="escudo">Escudo</label>
						<input type="file" class="form-control" id="escudo" name="escudo">
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Actualizar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop