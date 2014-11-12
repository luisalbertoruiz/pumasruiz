@extends('layout.main')
@section('title')
Jugadores Pumas Ruiz F.C.
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
			<h2 class="panel-title">Jugadores</h2>
		</div>
		<div class="panel-body">
		<button type="submit" class="btn btn-primary btn-sm pull-right">Nuevo Jugador</button>
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Sobrenombre</th>
							<th>Playera</th>
							<th></th>
							<th></th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td>c1</td>
							<td>c2</td>
							<td>c2</td>
							<td>c2</td>
							<td><a href="" class="btn btn-warning btn-xs">Editar</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Eliminar</a></td>
						</tr>
						<tr>
							<td>c1</td>
							<td>c2</td>
							<td>c2</td>
							<td>c2</td>
							<td><a href="" class="btn btn-warning btn-xs">Editar</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Eliminar</a></td>
						</tr>
						<tr>
							<td>c1</td>
							<td>c2</td>
							<td>c2</td>
							<td>c2</td>
							<td><a href="" class="btn btn-warning btn-xs">Editar</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Eliminar</a></td>
						</tr>
						<tr>
							<td>c1</td>
							<td>c2</td>
							<td>c2</td>
							<td>c2</td>
							<td><a href="" class="btn btn-warning btn-xs">Editar</a></td>
							<td><a href="" class="btn btn-danger btn-xs">Eliminar</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop