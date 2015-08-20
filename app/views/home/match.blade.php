<div class="panel panel-primary panelm">
    <div class="panel-body panelp">
        <div id="ultimo" class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <h4>Último partido</h4>
            {{ HTML::image('src/escudos/pumas.png', 'local',array('id'=>'local','title'=>'Pumas Ruiz FC')) }}
            {{ HTML::image('src/escudos/Holanda.png', 'visita',array('id'=>'visita','title'=>'Holanda Santiyan')) }}
            <h2>1 - 3</h2>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="proximo">
            <h4>Próximo partido</h4>
            {{ HTML::image('src/escudos/pumas.png', 'local',array('id'=>'local','title'=>'Pumas Ruiz FC')) }}
            {{ HTML::image('src/escudos/default.png', 'visita',array('id'=>'visita','title'=>'local')) }}
            <h3>vs</h3>
            <h3>sabado 22, 20:00 hrs</h3>
            <h3>Vicente Guerrero</h3>
        </div>
    </div>
</div>
