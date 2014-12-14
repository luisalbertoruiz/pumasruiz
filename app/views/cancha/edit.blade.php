@extends('layout.main')
@section('title')
Editar Cancha {{$cancha->nombre}} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"></span> Editar Cancha</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/cancha/actualizar/'.$cancha->id)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" class="form-control" id="nombre" name="nombre" maxlength="30" required value="{{$cancha->nombre}}"><br>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="locacion">Locación</label>
						<input type="text" class="form-control" id="locacion" name="locacion" maxlength="60" value="{{$cancha->locacion}}"><br>
						<label for="info">Información</label>
						<textarea name="info" id="info" cols="30" rows="5" class="form-control">{{$cancha->info}}</textarea><br>
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Cambiar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop