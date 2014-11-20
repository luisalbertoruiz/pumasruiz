@extends('layout.main')
@section('title')
{{ $equipo->nombre }} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-flag"> Equipo</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>{{ $equipo->nombre }}</th>
							<th>{{ HTML::image('src/escudos/'.$equipo->escudo, "escudo", array('id' => 'escudoshow', 'title' => $equipo->nombre.' '.$equipo->apellido)) }}</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Sobrenombre:</td>
							<td>{{$equipo->sobrenombre}}</td>
						</tr>
						<tr>
							<td>División:</td>
							<td>{{$equipo->division}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop