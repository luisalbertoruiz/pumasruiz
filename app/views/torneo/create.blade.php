@extends('layout.main')
@section('title')
Nuevo Torneo Pumas Ruiz F.C.
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
			<h2 class="panel-title"><span class="glyphicon glyphicon-calendar"> Nuevo Torneo</h2>
		</div>
		<div class="panel-body">
			{{ Form::open(array('url' => 'admin/torneo/guardar', 'files' => true)) }}
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="fechas">Fechas</label>
						<input type="number" class="form-control" id="fechas" name="fechas" required min="10" max="30" required><br>
						<label for="tipo">Tipo</label>
						<select name="tipo" id="tipo" class="form-control">
							<option value=""></option>
							<option value="Liga">Liga</option>
							<option value="Copa">Copa</option>
							<option value="InterLiga">Inter Liga</option>
							<option value="Amistoso">Amistoso</option>
						</select><br>
						<label for="competicion">Competición</label>
						<select name="competicion" id="competicion" class="form-control">
							<option value=""></option>
							<option>Fase regular y fase final</option>
							<option>Liguilla</option>
							<option>Puntos</option>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<label for="enfrentamiento">Enfrentamiento</label>
						<select name="enfrentamiento" id="enfrentamiento" class="form-control">
							<option value=""></option>
							<option>Ida y vuelta</option>
							<option>Simple</option>
						</select><br>
						<label for="finicio">Fecha de Inicio</label>
						<input type="date" class="form-control" id="finicio" name="finicio"><br>
						<label for="ffinal">Fecha Final</label>
						<input type="date" class="form-control" id="ffinal" name="ffinal">
					</div>
				</div>
				<button type="submit" class="btn btn-success pull-right">Registrar</button>
				<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
			{{ Form::close() }}
		</div>
	</div>
</div>
@stop