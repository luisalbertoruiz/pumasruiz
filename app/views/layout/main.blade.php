<!DOCTYPE html>
<html lang="es-MX">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<title>@yield('title')</title>
		<!-- CSS -->
		{{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
        {{ HTML::style('css/datepicker.css') }}
        {{ HTML::style('css/timepicker.css') }}
		<!-- JavaScript -->
		{{ HTML::script('js/jquery.js') }}
		{{ HTML::script('js/bootstrap.js') }}
		{{ HTML::script('js/datepicker.js') }}
		{{ HTML::script('js/timepicker.js') }}
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			@yield('header')
			@yield('navbar')
			@yield('content')
			@yield('footer')
		</div>
		@yield('css')
		@yield('js')
		@include('layout.alertas')
		@yield('script')
		<script>
		$(document).ready(function($) {
			$('#horario').timepicker({
				'timeFormat': 'H:i',
				'step': 60,
				'minTime': '8:00am',
    			'maxTime': '8:00pm' });
			$('#dia').datepicker({
				'format': 'yyyy-m-d'
			});
			$('#finicio').datepicker({
				'format': 'yyyy-m-d'
			});
			$('#ffinal').datepicker({
				'format': 'yyyy-m-d'
			});
		});
		</script>
	</body>
</html>