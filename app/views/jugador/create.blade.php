@extends('layout.main')
@section('title')
Nuevo Jugador Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"> Nuevo Jugador</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/jugador/guardar', 'files' => true)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required><br>
						<label for="apellido">Apellido</label>
						<input type="text" class="form-control" id="apellido" name="apellido" maxlength="30" required><br>
						<label for="sobrenombre">Sobrenombre</label>
						<input type="text" class="form-control" id="sobrenombre" name="sobrenombre" maxlength="30" required><br>
						<label for="posicion">Posición</label>
						<select name="posicion" id="posicion" class="form-control" required>
							<option value=""></option>
							<option value="Delantero">Delantero</option>
							<option value="Medio">Medio</option>
							<option value="Defensa">Defensa</option>
							<option value="Portero">Portero</option>
						</select><br>
						<label for="playera">Playera</label>
						<select class="form-control" id="playera" name="playera">
							<option value=""></option>
							<?php for ($i=1; $i <= 22; $i++) { 
								echo '<option>'.$i.'</option>';
							} ?>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="telefono">Teléfono</label>
						<input type="text" class="form-control" id="telefono" name="telefono"><br>
						<label for="celular">Celular</label>
						<input type="text" class="form-control" id="celular" name="celular"><br>
						<label for="direccion">Dirección</label>
						<input type="text" class="form-control" id="direccion" name="direccion"><br>
						<label for="email">eMail</label>
						<input type="mail" class="form-control" id="email" name="email"><br>
						<label for="foto">Foto</label>
						<input type="file" class="form-control" id="foto" name="foto">
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Registrar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop