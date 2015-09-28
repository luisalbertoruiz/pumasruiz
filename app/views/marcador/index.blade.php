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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"></span> Marcadores</h2>
			{{ HTML::link(URL::to('/admin/marcador/create'), '&nbsp;Nuevo', array('class' => 'btn btn-primary btn-sm pull-right glyphicon glyphicon-plus pull-right','style'=>'margin:-25px -10px 0 0')) }}
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover" id="tabla">
					<thead>
						<tr>
							<th>vs Equipo</th>
							<th>Dia</th>
							<th>favor</th>
							<th>Contra</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($marcadores as $marcador)
						<tr>
							<td>{{ $marcador->partido->equipo->nombre }}</td>
							<td>{{ $marcador->dia }}</td>
							<td>{{ $marcador->goles_f }}</td>
							<td>{{ $marcador->goles_c }}</td>
							<td>
								{{ link_to_route('admin.marcador.show','',$marcador->id, array('class' => 'btn btn-success btn-xs glyphicon glyphicon-eye-open')) }}
								{{ link_to_route('admin.marcador.edit','',$marcador->id, array('class' => 'btn btn-warning btn-xs glyphicon glyphicon-pencil')) }}
								<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/admin/marcador/'.$marcador->id)}}','{{$marcador->id}}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
								{{ Form::open(array('method' => 'DELETE', 'route' => array('admin.marcador.destroy', $marcador->id),'id'=>$marcador->id)) }}{{ Form::close() }}
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