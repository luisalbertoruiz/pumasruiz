<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('partido_id','Partidos')}}
		{{ Form::select('partido_id', $partidos, null, array('class'=>'form-control'))}}
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('jugador_id','Jugadores')}}
		{{ Form::select('jugador_id', $jugadores, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('goles')}}
		{{ Form::select('goles', $goles, null, array('class'=>'form-control'))}}
	</div>
</div>