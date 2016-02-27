<div class="panel panel-primary panelm">
    <div class="panel-body panelp">
        <div id="ultimo" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h4>Último partido</h4>
            {{ HTML::image('src/escudos/pumas.png', 'local',array('id'=>'local','title'=>'Pumas Ruiz FC')) }}
            {{ HTML::image('src/escudos/'.$ultimo->equipo->escudo, 'visita',array('id'=>'visita','title'=>$ultimo->equipo->nombre)) }}
            <h2>{{$ultimo->goles_f}} - {{$ultimo->goles_c}}</h2>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="proximo">
            <h4>Próximo partido</h4>
            @if($proximo)
            {{ HTML::image('src/escudos/pumas.png', 'local',array('id'=>'local','title'=>'Pumas Ruiz FC')) }}
            {{ HTML::image('src/escudos/'.$proximo->equipo->escudo, 'visita',array('id'=>'visita','title'=>$proximo->equipo->nombre)) }}
            <h3>vs</h3>
            <h3>{{strftime("%A %e",strtotime($proximo->dia))}}, {{date("g:i a",strtotime($proximo->horario))}}</h3>
            <h3>{{$proximo->cancha->nombre}}</h3>
            @else
            <br>
            <h4>PENDIENTE</h4>
            @endif
        </div>
    </div>
</div>
