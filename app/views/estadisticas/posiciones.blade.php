@extends('layout.main')
@section('metas')
@include('layout.metas')
@stop
@section('title')
Estadisticas :: Pumas Ruiz F.C.
@stop
<?php setlocale(LC_ALL, 'es_MX.UTF-8'); ?>
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbar')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title" style="display:inline-block;"><span>{{ HTML::image('src/logo-blanco-sm.png', 'pumasruiz',array('class'=>'panelImg')) }} Torneo</span></h3>&nbsp;&nbsp;&nbsp;
				<select name="" id="" style="width:150px;">
					<option value="">Liga</option>
				</select>
		  </div>
		  <div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Fecha</th>
							<th>Equipo</th>
							<th>Día</th>
							<th>Campo</th>
							<th>Hora</th>
							<th>JJ</th>
							<th>JG</th>
							<th>JE</th>
							<th>JP</th>
							<th>PG</th>
							<th>PGA</th>
							<th>GF</th>
							<th>GC</th>
							<th>DG</th>
							<th>GFA</th>
							<th>GCA</th>
							<th>DGA</th>
						</tr>
					</thead>
					<tbody>
					@foreach($posiciones as $posicion)
						<tr>
							<td>f-{{$posicion->fecha}}</td>
							<td>{{$posicion->equipo}}</td>
							<td>{{$posicion->dia}}</td>
							<td>{{$posicion->cancha_id}}</td>
							<td>{{$posicion->horario}}</td>
							<td>{{$posicion->jj}}</td>
							<td>{{$posicion->jg}}</td>
							<td>{{$posicion->je}}</td>
							<td>{{$posicion->jp}}</td>
							<td>{{$posicion->pg}}</td>
							<td>{{$posicion->pga}}</td>
							<td>{{$posicion->gf}}</td>
							<td>{{$posicion->gc}}</td>
							<td>{{$posicion->dg}}</td>
							<td>{{$posicion->gfa}}</td>
							<td>{{$posicion->gca}}</td>
							<td>{{$posicion->dga}}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		  </div>
	</div>
</div>
@stop
@section('footer')
	@include('home.footer')
@stop
@section('css')
@stop
@section('js')
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('.navbar-brand').hover(function() {
			$(this).find('span img').attr('src', '{{asset("src/logo-blanco-sm.png")}}');
		}, function() {
			$(this).find('span img').attr('src', '{{asset("src/logo-azul-sm.png")}}');
		});
		$('.noticiaP').succinct({
			size: 255
		});
	});
</script>
@stop
