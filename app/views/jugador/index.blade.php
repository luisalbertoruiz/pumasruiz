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
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"> Jugadores</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/jugador/crear'), 'Nuevo Jugador', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre(s)</th>
							<th>Apellido(s)</th>
							<th>Sobrenombre</th>
							<th>Playera</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($jugadores as $jugador)
						<tr>
							<td>{{ $jugador->nombre }}</td>
							<td>{{ $jugador->apellido }}</td>
							<td>{{ $jugador->sobrenombre }}</td>
							<td>{{ $jugador->playera }}</td>
							<td>{{ HTML::link(URL::to('/admin/jugador/mostrar/'.$jugador->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/jugador/editar/'.$jugador->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/jugador/eliminar/'.$jugador->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $jugadores->links() }}
			</div>
		</div>
	</div>
</div>
@stop