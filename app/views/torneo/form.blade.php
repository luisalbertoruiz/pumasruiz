<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('fechas')}}
		{{ Form::number('fechas', null, array('class'=>'form-control','min'=>'4','max'=>'40'))}}<br>
		{{ Form::label('tipoTorneo_id' , 'Tipo')}}
		{{ Form::select('tipoTorneo_id', $tipos, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('competicion_id','Competición')}}
		{{ Form::select('competicion_id', $competiciones, null, array('class'=>'form-control'))}}<br>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('enfrentamiento_id','Enfrentamiento')}}
		{{ Form::select('enfrentamiento_id', $enfrentamientos, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('finicio')}}
		{{ Form::text('finicio', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('ffinal')}}
		{{ Form::text('ffinal', null, array('class'=>'form-control'))}}<br>
	</div>
</div>