<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('equipo_id' , 'Equipo')}}
		{{ Form::select('equipo_id', $equipos, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('torneo_id' , 'Torneos')}}
		{{ Form::select('torneo_id', $torneos, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('cancha_id' , 'Cancha')}}
		{{ Form::select('cancha_id', $canchas, null, array('class'=>'form-control'))}}
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('dia')}}
		{{ Form::text('dia', null, array('class'=>'form-control datepicker'))}}<br>
		{{ Form::label('horario')}}
		{{ Form::text('horario', null, array('class'=>'form-control', 'id'=>'horario'))}}<br>
		{{ Form::label('fecha')}}
		{{ Form::number('fecha', null, array('class'=>'form-control','min'=>'4','max'=>'40'))}}
	</div>
</div>