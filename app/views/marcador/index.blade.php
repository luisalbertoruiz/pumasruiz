@extends('layout.main')
@section('title')
Partidos Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"> Marcadores</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/marcador/crear'), 'Nuevo Marcador', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>vs Equipo</th>
							<th>Dia</th>
							<th>favor</th>
							<th>Contra</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($marcadores as $marcador)
						<tr>
							<td>{{ $marcador->equipo }}</td>
							<td>{{ $marcador->dia }}</td>
							<td>{{ $marcador->goles_f }}</td>
							<td>{{ $marcador->goles_c }}</td>
							<td>{{ HTML::link(URL::to('/admin/marcador/mostrar/'.$marcador->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/marcador/editar/'.$marcador->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/marcador/eliminar/'.$marcador->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $marcadores->links() }}
			</div>
		</div>
	</div>
</div>
@stop