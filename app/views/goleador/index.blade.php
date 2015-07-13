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
			{{ HTML::link(URL::to('/admin/goleador/crear'), '&nbsp;Nuevo', array('class' => 'btn btn-primary btn-sm pull-right glyphicon glyphicon-plus pull-right','style'=>'margin:-25px -10px 0 0')) }}
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Partido</th>
							<th>Goles</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($goleadores as $goleador)
						<tr>
							<td>{{ $goleador->nombre.' '.$goleador->apellido }}</td>
							<td>{{ $goleador->equipo.' '.$goleador->dia }}</td>
							<td>{{ $goleador->goles }}</td>
							<td>{{ HTML::link(URL::to('/admin/goleador/mostrar/'.$goleador->id), '', array('class' => 'btn btn-success btn-xs glyphicon glyphicon-eye-open' )) }}
							{{ HTML::link(URL::to('/admin/goleador/editar/'.$goleador->id), '', array('class' => 'btn btn-warning btn-xs glyphicon glyphicon-pencil')) }}
							{{ HTML::link(URL::to('/admin/goleador/eliminar/'.$goleador->id), '', array('class' => 'btn btn-danger btn-xs glyphicon glyphicon-trash')) }}</td>
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
@section('css')
{{ HTML::style('css/dataTables.bs.css') }}
@stop
@section('js')
{{ HTML::script('js/dataTables.js') }}
{{ HTML::script('js/dataTables.bs.js') }}
{{ HTML::script('js/toastr.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('table').DataTable({
			"lengthMenu": [[5, 10, -1],[5, 10, 'Todo']]
		});
	});
</script>
@stop