<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header" >
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ URL::to('/') }}"><span>{{ HTML::image('src/logo-azul-sm.png', 'home',array('class'=>'home')) }} Home</span></a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Jugadores</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-play"></span> Partidos</a></li>
			<li><a href="{{ URL::to('/estadisticas') }}"><span class="glyphicon glyphicon-pencil"></span> Estadisticas</a></li>
			<li><a href="{{ URL::to('galeria') }}"><span class="glyphicon glyphicon-picture"></span> Galeria</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a class="fbnb" href="https://www.facebook.com/pages/Pumas-Ruiz/1435980493396037">{{ HTML::image('src/fbpr.png', 'facebook',array('class'=>'home')) }}</a></li>
			<li><a href="{{ URL::to('login') }}"><span class="glyphicon glyphicon-log-in"></a></li>
		</ul>
	</div>
</nav>