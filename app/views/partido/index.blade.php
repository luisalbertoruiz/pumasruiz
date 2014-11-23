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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"> Partidos</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/partido/crear'), 'Nuevo Partido', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>vs Equipo</th>
							<th>Dia</th>
							<th>Horario</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($partidos as $partido)
						<?php $equipo  = Equipo::find($partido->equipo_id) ?>
						<tr>
							<td>{{ $equipo->nombre }}</td>
							<td>{{ $partido->dia }}</td>
							<td>{{ date('h:ia',strtotime($partido->horario)) }}</td>
							<td>{{ HTML::link(URL::to('/admin/partido/mostrar/'.$partido->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/partido/editar/'.$partido->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/partido/eliminar/'.$partido->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $partidos->links() }}
			</div>
		</div>
	</div>
</div>
@stop