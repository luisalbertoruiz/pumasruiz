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
			<h2 class="panel-title">Nuevo Jugador</h2>
		</div>
		<div class="panel-body">
			<form action="" method="POST" role="form">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="">Nombre</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Apellido</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Sobrenombre</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Posición</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Playera</label>
						<input type="text" class="form-control" id="" placeholder="Input field">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="">Teléfono</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Celular</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Dirección</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">eMail</label>
						<input type="text" class="form-control" id="" placeholder="Input field"><br>
						<label for="">Foto</label>
						<input type="file" class="form-control" id="" placeholder="Input field">
					</div>
				</div>
				<button type="button" class="btn btn-warning pull-right">Limpiar</button>
				<button type="submit" class="btn btn-success pull-right">Registrar</button>
			</form>
		</div>
	</div>
</div>
@stop