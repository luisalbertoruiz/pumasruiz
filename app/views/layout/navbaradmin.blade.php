<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header" >
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home"> Home</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('/admin/partido') }}"><span class="glyphicon glyphicon-play"> Partidos</a></li>
			<li><a href="{{ URL::to('/admin/marcador') }}"><span class="glyphicon glyphicon-pencil"> Marcador</a></li>
			<li><a href="{{ URL::to('/admin/goleador') }}"><span class="glyphicon glyphicon-record"> Goleo</a></li>
			<li><a href="{{ URL::to('/admin/posicion') }}"><span class="glyphicon glyphicon-list"> Posición</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mas Opciones<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><span class="glyphicon glyphicon-usd"> Aportacion</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-ok"> Asistencia</a></li>
					<li class="divider"></li>
					<li><a href="#"><span class="glyphicon glyphicon-list-alt"> Noticias</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-picture"> Galeria</a></li>
					<li class="divider"></li>
					<li><a href="{{ URL::to('/admin/jugador') }}"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;Jugadores</a></li>
					<li><a href="{{ URL::to('/admin/torneo') }}"><span class="glyphicon glyphicon-calendar"> Torneos</a></li>
					<li><a href="{{ URL::to('/admin/equipo') }}"><span class="glyphicon glyphicon-flag"> Equipos</a></li>
					<li><a href="{{ URL::to('/admin/cancha') }}"><span class="glyphicon glyphicon-th-large"> Canchas</a></li>
					
				</ul>
			</li>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>
@if(Session::has('flash_warning'))
	<div id="notice" class="alert alert-warning" role="alert"><p>{{ Session::get('flash_warning') }}</p></div>
@endif
@if(Session::has('flash_error'))
	<div id="notice" class="alert alert-danger" role="alert"><p>{{ Session::get('flash_error') }}</p></div>
@endif
@if(Session::has('flash_notice'))
	<div id="notice" class="alert alert-success" role="alert"><p>{{ Session::get('flash_notice') }}</p></div>
@endif