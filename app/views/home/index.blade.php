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
	@include('home.match')
	@include('home.carousel')
	@include('home.notice')
	@include('home.table')
	@include('home.player')
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
		$('.noticiaP').succinct({
			size: 260
		});
	});
</script>
@stop