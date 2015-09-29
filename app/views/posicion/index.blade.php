@extends('layout.main')
@section('title')
Posiciones Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-list"></span> Posiciones</h2>
			{{ HTML::link(URL::to('/admin/posicion/create'), '&nbsp;Nuevo', array('class' => 'btn btn-primary btn-sm pull-right glyphicon glyphicon-plus pull-right','style'=>'margin:-25px -10px 0 0')) }}
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Equipo</th>
							<th>Fecha</th>
							<th>Resultado</th>
							<th>Puntos</th>
							<th>Torneo</th>
							<th style="max-width:50px;">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posiciones as $posicion)
						<tr>
							<td>{{ $posicion->equipo->nombre }}</td>
							<td>{{ $posicion->fecha }}</td>
							<td>{{ $posicion->goles_f }}-{{ $posicion->goles_c }}</td>
							<td>{{ $posicion->puntos }}</td>
							<td>{{ $posicion->torneo->nombre }}</td>
							<td>
							{{ link_to_route('admin.posicion.edit','',$posicion->id, array('class' => 'btn btn-warning btn-xs glyphicon glyphicon-pencil')) }}
							<a href="javascript:;" onclick="eliminaRegistro('{{URL::to('/admin/posicion/'.$posicion->id)}}','{{$posicion->id}}');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="eliminar"><i class="glyphicon glyphicon-trash"></i></a>
							{{ Form::open(array('method' => 'DELETE', 'route' => array('admin.posicion.destroy', $posicion->id),'id'=>$posicion->id)) }}{{ Form::close() }}
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
<div id="dialog" title="¿Deseas eliminar el registro?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span> Se eliminara permanentemente</p>
</div>
@stop
@section('css')
{{ HTML::style('css/dataTables.bs.css') }}
{{ HTML::style('css/toastr.css') }}
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
		$("#dialog").dialog({
			resizable: false,
			height:170,
			modal: true,
			autoOpen: false,
			show: {
			effect: "bounce",
			duration: 500
			},
			hide: {
			effect: "fade",
			duration: 50
			}
		});
	});
function eliminaRegistro (url,id) {
	$( "#dialog" ).dialog( "open" );
	$( "#dialog" ).dialog({
		buttons: {
			"No": function() {
				$( this ).dialog( "close" );

			},
			"Si": function() {
				$( this ).dialog( "close" );
				$('#'+id).submit();
			}
		}
	});
}
</script>
@stop