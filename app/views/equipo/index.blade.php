@extends('layout.main')
@section('title')
Equipos Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-flag"> Equipos</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/equipo/crear'), 'Nuevo Equipo', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Sobrenombre</th>
							<th>Division</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($equipos as $equipo)
						<tr>
							<td>{{ $equipo->nombre }}</td>
							<td>{{ $equipo->sobrenombre }}</td>
							<td>{{ $equipo->division }}</td>
							<td>{{ HTML::link(URL::to('/admin/equipo/mostrar/'.$equipo->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/equipo/editar/'.$equipo->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/equipo/eliminar/'.$equipo->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $equipos->links() }}
			</div>
		</div>
	</div>
</div>
@stop