@extends('layout.main')
@section('title')
Cancha {{ $cancha->nombre }} Pumas Ruiz F.C.
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbaradmin')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"> Cancha</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>{{ $cancha->nombre }}</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Dirección:</td>
							<td>{{$cancha->locacion}}</td>
						</tr>
						<tr>
							<td>Información:</td>
							<td>{{$cancha->info}}</td>
						</tr>
						<tr>
							<td>Ubicación:</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1" id="map" style="height:300px">
				
				</div>
			</div>
			<br>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop
@section('css')
@stop
@section('js')
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
{{ HTML::script('js/gmaps.js') }}
@stop
@section('script')
<script type="text/javascript">
	var map;
	jQuery(document).ready(function($)
	{
		map = new GMaps({
			div: '#map',
			lat: {{ $cancha->latitud }},
			lng: {{ $cancha->longitud }},
			zoom: 16
		});
		map.addMarker({
		  lat: {{ $cancha->latitud }},
		  lng: {{ $cancha->longitud }}
		});
	});
</script>
@stop