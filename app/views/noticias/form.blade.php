<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('titulo')}}
		{{ Form::text('titulo', null, array('class'=>'form-control','required'=>'true'))}}<br>
		{{ Form::label('publicacion' , 'Fecha de Publicación')}}
		{{ Form::text('publicacion', null, array('class'=>'form-control datepicker','required'=>'true'))}}<br>
		{{ Form::label('imagen')}}
		{{ Form::file('imagen', array('class'=>'form-control','required'=>'true'))}}<br>
		<div class="progress">
		  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
		    <span class="sr-only">0% Complete (success)</span>
		  </div>
		</div>
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('contenido')}}
		{{ Form::textarea('contenido', null, array('class'=>'form-control','required'=>'true'))}}<br>
	</div>
</div>