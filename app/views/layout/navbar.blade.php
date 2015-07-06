<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header" >
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('jugadores') }}">Jugadores</a></li>
			<li><a href="{{ URL::to('partidos') }}">Partidos</a></li>
			<li><a href="{{ URL::to('estadisticas') }}">Estadisticas</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></a></li>
		</ul>
	</div>
</nav>