<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span>{{ HTML::image('src/logo-blanco-sm.png', 'pumasruiz',array('class'=>'panelImg')) }} Tabla de Posiciones</span></h2>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Equipo</th>
                        <th>Pts</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1 ?>
                @foreach($posiciones as $posicion)
                    <tr>
                        <th>{{$i++}}</th>
                        <td>{{ HTML::image('src/escudos/'.$posicion->escudo, 'local',array('class'=>'escudoTabla')) }}
                        {{ $posicion->nombre }}</td>
                        <td>{{ $posicion->puntos }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>