@extends('layout.main')
@section('title')
Pumas Ruiz F.C.
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbar')
@stop
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-md-offset-3 col-lg-offset-4" >
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Inicia Sesión</h3>
			</div>
			<div class="panel-body">
			<br><br>
			  	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
					<form action="{{ URL::to('loged') }}" method="POST" role="form" id="login">
						<div class="form-group">
							<input type="text" class="form-control" id="username" name="username" maxlength="15" autocomplete="off" placeholder="Usuario" required>
						</div><br>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" maxlength="15" autocomplete="off" placeholder="Contraseña" required>
						</div><br><br>
						<button type="submit" class="btn btn-primary pull-right">Ingresar</button><br><br><br>
					</form>
				</div>
			</div>
		</div><br><br>
	</div>
@stop
@section('css')
{{ HTML::style('css/toastr.css') }}
@stop
@section('js')
{{ HTML::script('js/validate.js') }}
{{ HTML::script('js/toastr.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('form').validate();
	});
</script>
@stop
@section('footer')
	@include('home.footer')
@stop