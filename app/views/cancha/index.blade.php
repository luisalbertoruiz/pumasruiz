@extends('layout.main')
@section('title')
Canchas Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"> Canchas</h2>
		</div>
		<div class="panel-body">
		{{ HTML::link(URL::to('/admin/cancha/crear'), 'Nueva Cancha', array('class' => 'btn btn-primary btn-sm pull-right')) }}
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Locación</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($canchas as $cancha)
						<tr>
							<td>{{ $cancha->nombre }}</td>
							<td>{{ $cancha->locacion }}</td>
							<td>{{ HTML::link(URL::to('/admin/cancha/mostrar/'.$cancha->id), 'Ver', array('class' => 'btn btn-success btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/cancha/editar/'.$cancha->id), 'Editar', array('class' => 'btn btn-warning btn-xs')) }}</td>
							<td>{{ HTML::link(URL::to('/admin/cancha/eliminar/'.$cancha->id), 'Eliminar', array('class' => 'btn btn-danger btn-xs')) }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $canchas->links() }}
			</div>
		</div>
	</div>
</div>
@stop