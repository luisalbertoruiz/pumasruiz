@extends('layout.main')
@section('title')
Slider Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-th-large"></span> Slider</h2>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Posición</th>
							<th>Imagen</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sliders as $slider)
						<tr>
							<td>{{ $slider->id }}</td>
							<td>{{ HTML::image('src/slider/miniaturas/'.$slider->imagen.'.jpg', 'pumasruiz')}}</td>
							<td>
							{{ link_to_route('admin.slider.show','',$slider->id, array('class' => 'btn btn-success btn-xs glyphicon glyphicon-eye-open')) }}
							{{ link_to_route('admin.slider.edit','',$slider->id, array('class' => 'btn btn-info btn-xs glyphicon glyphicon-refresh')) }}
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
@section('css')
{{ HTML::style('css/toastr.css') }}
@stop
@section('js')
{{ HTML::script('js/toastr.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		
	});
</script>
@stop