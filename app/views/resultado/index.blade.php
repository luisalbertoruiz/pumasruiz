@extends('layout.main')
@section('title')
Resultados Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-list"></span> Resultados</h2>
			{{ HTML::link(URL::to('/admin/resultado/crear'), '&nbsp;Nuevo', array('class' => 'btn btn-primary btn-sm pull-right glyphicon glyphicon-plus pull-right','style'=>'margin:-25px -10px 0 0')) }}
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Partido</th>
							<th>Fecha</th>
							<th>Local</th>
							<th>Visitante</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($resultados as $resultado)
						<tr>
							<td>{{ $resultado->local_id.'vs'.$resultado->visitante_id }}</td>
							<td>{{ $resultado->fecha }}</td>
							<td>{{ $resultado->goles_l }}</td>
							<td>{{ $resultado->goles_v }}</td>
							<td>
							{{ HTML::link(URL::to('/admin/resultado/mostrar/'.$resultado->id), '',
							array('class' => 'btn btn-success btn-xs glyphicon glyphicon-eye-open')) }}
							{{ HTML::link(URL::to('/admin/resultado/editar/'.$resultado->id), '',
							array('class' => 'btn btn-warning btn-xs glyphicon glyphicon-pencil')) }}
							{{ HTML::link(URL::to('/admin/resultado/eliminar/'.$resultado->id), '',
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