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
			<h2 class="panel-title"><span class="glyphicon glyphicon-play"> Nuevo Marcadores</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/marcador/actualizar/'.$marcador->id)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="partido">Partido</label>
						<input type="text" name="partido" id="partido" class="form-control" required value="{{ $equipo->nombre.' '.$partido->dia }}" disabled>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="goles_f">Goles a favor</label>
						<select class="form-control" id="goles_f" name="goles_f" required>
							<option>{{$marcador->goles_f}}</option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
						</select><br>
						<label for="goles_c">Goles en Contra</label>
						<select class="form-control" id="goles_c" name="goles_c" required>
							<option>{{$marcador->goles_c}}</option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Actualizar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop