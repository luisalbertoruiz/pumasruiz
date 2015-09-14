@extends('layout.main')
@section('title')
Editar Slider Imagen No. {{ $slider->id}} Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-user"></span> Editar Slider Imagen No. {{ $slider->id}}</h2>
		</div>
		<div class="panel-body">
			{{ Form::model($slider,array('method'=>'PUT', 'route' => array('admin.slider.update', $slider->id), 'files' => true)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-sm-offset-3">
					<div class="form-group">
						{{ Form::label('imagen')}}
						{{ Form::file('imagen', array('class'=>'form-control', 'required'=>'true'))}}<br>
					</div>
				</div><br><br><br><br><br>
				<button type="submit" class="btn btn-success pull-right">Actualizar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop