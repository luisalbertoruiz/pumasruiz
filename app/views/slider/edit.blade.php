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
				<div class="progress">
					<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
						<span class="sr-only">0% Complete (success)</span>
					</div>
				</div>
				</div>
		</div>
		<div class="panel-footer">
			<button type="submit" class="btn btn-success pull-right">Actualizar</button>
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop
@section('js')
{{ HTML::script('js/form.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('form').submit(function(event) {
			event.preventDefault();
			$(this).ajaxSubmit({
				uploadProgress:function(event, position, total, percentComplete) {
		            $('.progress-bar').css('width', percentComplete+'%');
		        },
		        complete:function(xhr) {
		            window.location="{{Url::to('/admin/slider')}}";
		        }
			});
		});
	});
</script>
@stop