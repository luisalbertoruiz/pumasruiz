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
		{{ HTML::link(URL::to('/admin/cancha/crear'), '&nbsp;Nuevo',
		array('class' => 'btn btn-primary btn-sm pull-right glyphicon glyphicon-plus')) }}
			<div class="table-responsive">
				<table class="table table-hover" id="tabla">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Ubicación</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($canchas as $cancha)
						<tr>
							<td>{{ $cancha->nombre }}</td>
							<td>{{ $cancha->locacion }}</td>
							<td>
							{{ HTML::link(URL::to('/admin/cancha/mostrar/'.$cancha->id), '',
							array('class' => 'btn btn-success btn-xs glyphicon glyphicon-eye-open')) }}
							{{ HTML::link(URL::to('/admin/cancha/editar/'.$cancha->id), '',
							array('class' => 'btn btn-warning btn-xs glyphicon glyphicon-pencil')) }}
							{{ HTML::link(URL::to('/admin/cancha/eliminar/'.$cancha->id), '',
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
@stop
@section('css')
{{ HTML::style('css/datatable.css') }}
@stop
@section('js')
{{ HTML::script('js/datatable.js') }}
{{ HTML::script('js/toastr.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		
	});
</script>
@stop