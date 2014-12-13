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
			{{ Form::open(array('url' => 'admin/marcador/guardar')) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="partido">Partido</label>
						<select name="partido" id="partido" class="form-control" required>
							<option value=""></option>
							@foreach($partidos as $partido)
								<option value="{{$partido->id}}">{{ $partido->nombre.' '.$partido->dia }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="goles_f">Goles a favor</label>
						<select class="form-control" id="goles_f" name="goles_f" required>
							<option value=""></option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
						</select><br>
						<label for="goles_c">Goles en Contra</label>
						<select class="form-control" id="goles_c" name="goles_c" required>
							<option value=""></option>
							@for($i=0; $i<10; $i++)
								<option>{{$i}}</option>}
							@endfor
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