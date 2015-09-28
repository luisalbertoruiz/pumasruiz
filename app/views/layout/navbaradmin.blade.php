<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header" >
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><span>{{ HTML::image('src/logo-azul-sm.png', 'home',array('class'=>'home')) }} Home</span></a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('/admin/partido') }}"><span class="glyphicon glyphicon-play"></span> Partidos</a></li>
			<li><a href="{{ URL::to('/admin/marcador') }}"><span class="glyphicon glyphicon-pencil"></span> Marcador</a></li>
			<li><a href="{{ URL::to('/admin/goleador') }}"><span class="glyphicon glyphicon-record"></span> Goleo</a></li>
			<li><a href="{{ URL::to('/admin/posicion') }}"><span class="glyphicon glyphicon-list"></span> Posiciones</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-tasks"></span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><span class="glyphicon glyphicon-usd"></span> Aportaciones</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-ok"></span> Asistencia</a></li>
					<li class="divider"></li>
					<li><a href="{{ URL::to('/admin/noticia') }}"><span class="glyphicon glyphicon-list-alt"></span> Noticias</a></li>
					<li><a href="{{ URL::to('/admin/galeria') }}"><span class="glyphicon glyphicon-camera"></span> Galeria</a></li>
					<li><a href="{{ URL::to('/admin/slider') }}"><span class="glyphicon glyphicon-picture"></span> Slider</a></li>
					<li class="divider"></li>
					<li><a href="{{ URL::to('/admin/jugador') }}"><span class="glyphicon glyphicon-user"></span> Jugadores</a></li>
					<li><a href="{{ URL::to('/admin/torneo') }}"><span class="glyphicon glyphicon-calendar"></span> Torneos</a></li>
					<li><a href="{{ URL::to('/admin/equipo') }}"><span class="glyphicon glyphicon-flag"></span> Equipos</a></li>
					<li><a href="{{ URL::to('/admin/cancha') }}"><span class="glyphicon glyphicon-th-large"></span> Canchas</a></li>
					<li><a href="{{ URL::to('/admin/categoria') }}"><span class="glyphicon glyphicon-stats"></span> Categorias</a></li>				
				</ul>
			</li>
			<li><a href="{{ URL::to('/logout') }}"><span class="glyphicon glyphicon-log-out"></span></a></li>
		</ul>
	</div>
</nav>