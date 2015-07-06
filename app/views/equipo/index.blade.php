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
			<h2 class="panel-title"><span class="glyphicon glyphicon-flag"> Equipos</span></h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/equipo/crear'), '&nbsp;Nuevo',
		array('class' => 'btn btn-primary btn-sm pull-right glyphicon glyphicon-plus')) }}
			<div class="table-responsive">
				<table class="table table-hover" id="tabla">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Sobrenombre</th>
							<th>Division</th>
							<th>Acciones</th>

						</tr>
					</thead>
					<tbody>
						@foreach($equipos as $equipo)
						<tr>
							<td>{{ $equipo->nombre }}</td>
							<td>{{ $equipo->sobrenombre }}</td>
							<td>{{ $equipo->division }}</td>
							<td>
							{{ HTML::link(URL::to('/admin/equipo/mostrar/'.$equipo->id), '',
							array('class' => 'btn btn-success btn-xs glyphicon glyphicon-eye-open')) }}
							{{ HTML::link(URL::to('/admin/equipo/editar/'.$equipo->id), '',
							array('class' => 'btn btn-warning btn-xs glyphicon glyphicon-pencil')) }}
							{{ HTML::link(URL::to('/admin/equipo/eliminar/'.$equipo->id), '',
							array('class' => 'btn btn-danger btn-xs glyphicon glyphicon-trash')) }}
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<br><br>
			</div>
		</div>
	</div>
</div>
@stop