<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('nombre')}}
		{{ Form::text('nombre', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('latitud')}}
		{{ Form::text('latitud', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('longitud')}}
		{{ Form::text('longitud', null, array('class'=>'form-control'))}}
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('locacion','Locación')}}
		{{ Form::text('locacion', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('info','Información')}}
		{{ Form::textarea('info', null, array('class'=>'form-control', 'cols'=>'30', 'rows'=>'5'))}}
	</div>
</div>