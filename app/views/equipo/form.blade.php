<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('nombre')}}
		{{ Form::text('nombre', null, array('class'=>'form-control'))}}<br>
		{{ Form::label('alias')}}
		{{ Form::text('alias', null, array('class'=>'form-control'))}}<br>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('categoria_id','Categoría')}}
		{{ Form::select('categoria_id', $categorias, null, array('class'=>'form-control'))}}<br>
		{{ Form::label('escudo')}}
		{{ Form::file('escudo', array('class'=>'form-control'))}}<br>
	</div>
</div>