<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('partido_id' , 'Partido')}}
		{{ Form::select('partido_id', $partidos, null, array('class'=>'form-control'))}}
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('goles_f' , 'Goles a favor')}}
		{{ Form::select('goles_f', $goles, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('goles_c' , 'Goles en contra')}}
		{{ Form::select('goles_c', $goles, null, array('class'=>'form-control'))}}<br>
	</div>
</div>
