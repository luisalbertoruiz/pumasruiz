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
				<h3 class="panel-title">Panel title</h3>
		  </div>
		  <div class="panel-body text-justify">
				<h4><a href="" class="linkNoticia">Primer Derrota</a></h4>
				<h6>12 Julio 2015</h6>
				{{ HTML::image('src/galeria/2s.jpg', 'pumasruiz',array('class'=>'noticiaImg img-responsive center-block')) }}
				<p class="noticiaP">Segundo Partido y ya tuvimos la primer derrota, despues de ir perdiendo dos goles a cero, en un tiro de Castigo "Ale" Anota un Hermoso Gol, el tiro sale con bastante chanfle muy duro, pasa arriba de la barrera y se incrusta en el mero angulo, se sigue peleando duro por los dos equipos, debemos confesar que casi siempre el Chicago Fire nos Gano la Media, y a sufrir se ha dicho perdiendiendonos la oportunidad de empatar el partido.</p>
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