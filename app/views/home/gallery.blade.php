@extends('layout.main')
@section('metas')
@include('layout.metas')
@stop
@section('title')
Pumas Ruiz F.C.
@stop
@section('header')
	@include('layout.header')
@stop
@section('navbar')
	@include('layout.navbar')
@stop
@section('content')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
				<div class="folder">
					<span class="tituloFolder">Fecha 1</span>
					<a data-toggle="modal" data-backdrop="true" href='#modal-id'>{{ HTML::image('src/miniaturas/folder1.jpg', 'pumasruiz',array('class'=>'img-responsive center-block galeria')) }}</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
				<div class="folder">
					<span class="tituloFolder">Fecha 1</span>
					<a data-toggle="modal" data-backdrop="true" href='#modal-id'>{{ HTML::image('src/miniaturas/folder1.jpg', 'pumasruiz',array('class'=>'img-responsive center-block galeria')) }}</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
				<div class="folder">
					<span class="tituloFolder">Fecha 1</span>
					<a data-toggle="modal" data-backdrop="true" href='#modal-id'>{{ HTML::image('src/miniaturas/folder1.jpg', 'pumasruiz',array('class'=>'img-responsive center-block galeria')) }}</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
				<div class="folder">
					<span class="tituloFolder">Fecha 1</span>
					<a data-toggle="modal" data-backdrop="true" href='#modal-id'>{{ HTML::image('src/miniaturas/folder1.jpg', 'pumasruiz',array('class'=>'img-responsive center-block galeria')) }}</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
				<div class="folder">
					<span class="tituloFolder">Fecha 1</span>
					<a data-toggle="modal" data-backdrop="true" href='#modal-id'>{{ HTML::image('src/miniaturas/folder1.jpg', 'pumasruiz',array('class'=>'img-responsive center-block galeria')) }}</a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 ">
				<div class="folder">
					<span class="tituloFolder">Fecha 1</span>
					<a data-toggle="modal" data-backdrop="true" href='#modal-id'>{{ HTML::image('src/miniaturas/folder1.jpg', 'pumasruiz',array('class'=>'img-responsive center-block galeria')) }}</a>
				</div>
			</div>
		</div>
	</div>
@stop
@section('footer')
	@include('home.footer')
@stop
<div class="modal fade col-xs-10 col-xs-offset-1" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				Lorem ipsum dolor sit amet, consectetur adipisicing edivt. Sapiente iusto, ducimus ullam eaque dolore architecto ad consequatur quia enim, quaerat, assumenda, perspiciatis illo modi autem amet ut! Quae, unde, expdivcabo.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left" ><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button>
				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
			</div>
		</div>
	</div>
</div>
@section('css')
@stop
@section('js')
	{{ HTML::script('js/truncate.js') }}
@stop
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		$('.navbar-brand').hover(function() {
			$(this).find('span img').attr('src', '{{asset("src/logo-blanco-sm.png")}}');
		}, function() {
			$(this).find('span img').attr('src', '{{asset("src/logo-azul-sm.png")}}');
		});
	});
</script>
@stop