@extends('layout.main')
@section('title')
Slider Imagen No. {{ $slider->id}} Pumas Ruiz F.C.
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbaradmin')
@stop
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title"><span class="glyphicon glyphicon-picture"></span> Slider Imagen No. {{ $slider->id}}</h2>
		</div>
		<div class="panel-body">
			{{ HTML::image('src/slider/'.$slider->imagen.'.jpg', 'pumasruiz',array('width' => '100%'))}}
			<br><br>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop