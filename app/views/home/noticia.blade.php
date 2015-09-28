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
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<div class="panel panel-primary">
		  <div class="panel-heading">
				<h3 class="panel-title">{{$noticia->titulo}} <small>{{$noticia->publicacion}}</small></h3>
		  </div>
		  <div class="panel-body text-justify">
				{{ HTML::image('src/noticias/'.$noticia->imagen, 'pumasruiz',array('class'=>'noticiaImg img-responsive center-block')) }}
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
					<p class="noticiaP">{{$noticia->contenido}}</p>
				</div>
		  </div>
		  <div class="panel-footer" style="background-color:#b2945e;border-top-width: 0px;border-radius:0px;">
			<a class="btn btn-primary" href='{{ URL::previous() }}'>Regresar</a>
		</div>
	</div>
</div>
@stop
@section('footer')
	@include('home.footer')
@stop
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