@extends('layout.main')
@section('title')
Marcadoress Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"> Nuevo Resultado</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/resultado/guardar')) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="elocal">Local</label>
						<select name="local" id="elocal" class="form-control" required>
							<option value=""></option>
							@foreach($equipos as $equipo)
								<option value="{{$equipo->id}}">{{ $equipo->nombre }}</option>
							@endforeach
						</select><br>
						<label for="goles_c">Goles local</label>
						<select class="form-control" id="goles_c" name="goles_c" required>
							<option value=""></option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
						</select><br>
						<label for="torneo">Torneo</label>
						<select name="torneo" id="torneo" class="form-control" required>
							<option value=""></option>
							@foreach($torneos as $torneo)
								<option value="{{$torneo->id}}">{{ $torneo->nombre }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="visitante">Visitante</label>
						<select name="visitante" id="visitante" class="form-control" required disabled>
							<option value=""></option>
							@foreach($equipos as $equipo)
								<option value="{{$equipo->id}}">{{ $equipo->nombre }}</option>
							@endforeach
						</select><br>
						<label for="goles_f">Goles visitante</label>
						<select class="form-control" id="goles_f" name="goles_f" required>
							<option value=""></option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
						</select>
						<select name="torneo" id="torneo" class="form-control" required>
							<option value=""></option>
							@foreach($torneos as $torneo)
								<option value="{{$torneo->id}}">{{ $torneo->nombre }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Registrar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop
@section('js')
{{ HTML::script('js/toastr.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('#elocal').change(function(event) {
			var valor = $(this).val();
			$('#visitante').prop('selectedIndex',0);
			$('#visitante').removeAttr('disabled');
			$("#visitante option[value='"+valor+"']").remove();
		});
	});
</script>
@stop