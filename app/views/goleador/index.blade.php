@extends('layout.main')
@section('title')
Goleadores Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-record"></span> Goleadores</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/goleador/crear'), 'Nuevos Goles', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Partido</th>
							<th>Goles</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($goleadores as $goleador)
						<tr>
							<td>{{ $goleador->nombre.' '.$goleador->apellido }}</td>
							<td>{{ $goleador->equipo.' '.$goleador->dia }}</td>
							<td>{{ $goleador->goles }}</td>
							<td>{{ HTML::link(URL::to('/admin/goleador/mostrar/'.$goleador->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/goleador/editar/'.$goleador->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/goleador/eliminar/'.$goleador->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $goleadores->links() }}
			</div>
		</div>
	</div>
</div>
@stop