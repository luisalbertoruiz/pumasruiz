@extends('layout.main')
@section('title')
{{ $noticia->titulo }} :: Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-list-alt"> Noticia</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="2"><center>{{ HTML::image('src/noticias/'.$noticia->imagen, 'pumasruiz')}}</center></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Titulo:</td>
							<td>{{ $noticia->titulo}}</td>
						</tr>
						<tr>
							<td>Fecha de publicación:</td>
							<td>{{ $noticia->publicacion}}</td>
						</tr>
						<tr>
							<td>Contenido:</td>
							<td style="text-align:justify;">{{ $noticia->contenido}}</td>
						</tr>
					</tbody>
				</table>
			</div>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop