<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('nombre')}}
		{{ Form::text('nombre', null, array('class'=>'form-control','required'=>'true'))}}<br>
		{{ Form::label('apellido')}}
		{{ Form::text('apellido', null, array('class'=>'form-control','required'=>'true'))}}<br>
		{{ Form::label('alias')}}
		{{ Form::text('alias', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('posicion_id','Posición')}}
		{{ Form::select('posicion_id', $posiciones, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('playera')}}
		{{ Form::select('playera', $playera, null, array('class'=>'form-control'))}}<br>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('telefono')}}
		{{ Form::text('telefono', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('celular')}}
		{{ Form::text('celular', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('direccion')}}
		{{ Form::text('direccion', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('email')}}
		{{ Form::text('email', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('foto')}}
		{{ Form::file('foto', array('class'=>'form-control'))}}<br>
	</div>
</div>