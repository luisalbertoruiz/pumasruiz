<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('nombre')}}
		{{ Form::text('nombre', null, array('class'=>'form-control'))}}
	</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	<div class="form-group">
		{{ Form::label('info','Información')}}
		{{ Form::textarea('info', null, array('class'=>'form-control'))}}
	</div>
</div>