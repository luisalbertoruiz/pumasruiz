<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('equipo_id' , 'Equipo')}}
		{{ Form::select('equipo_id', array('' => '') + $equipos, null, array('class'=>'form-control','required'=>'true'))}}<br>
		{{ Form::label('torneo_id','Torneo')}}
		{{ Form::select('torneo_id', $torneos, null, array('class'=>'form-control','required'=>'true'))}}<br>
		{{ Form::label('fecha')}}
		{{ Form::number('fecha', null, array('class'=>'form-control','min'=>'1','required'=>'true'))}}
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('goles_f','Goles a Favor')}}
		{{ Form::number('goles_f', null, array('class'=>'form-control','required'=>'true'))}}<br>
		{{ Form::label('goles_c','Goles en contra')}}
		{{ Form::number('goles_c', null, array('class'=>'form-control','required'=>'true'))}}<br>
	</div>
</div>