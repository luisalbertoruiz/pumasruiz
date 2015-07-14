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
			{{ Form::model($cancha,array('method'=>'PUT', 'route' => array('admin.cancha.update',$cancha->id))) }}
				@include('cancha.form')
				{{ Form::submit('Cambiar',array('class'=>'btn btn-success pull-right'))}}
				{{ HTML::link(URL::previous(), 'Regresar',array('class' => 'btn btn-primary')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop