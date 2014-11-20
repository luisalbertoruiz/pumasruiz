@extends('layout.main')
@section('title')
Torneoes Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"> Torneoes</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/torneo/crear'), 'Nuevo Torneo', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Fechas</th>
							<th>Enfrentamiento</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($torneos as $torneo)
						<tr>
							<td>{{ $torneo->nombre }}</td>
							<td>{{ $torneo->fechas }}</td>
							<td>{{ $torneo->enfrentamiento }}</td>
							<td>{{ HTML::link(URL::to('/admin/torneo/mostrar/'.$torneo->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/torneo/editar/'.$torneo->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/torneo/eliminar/'.$torneo->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $torneos->links() }}
			</div>
		</div>
	</div>
</div>
@stop