<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="panel-title"><span>{{ HTML::image('src/logo-blanco-sm.png', 'pumasruiz',array('class'=>'panelImg')) }} Noticias</span></h2>
        </div>
        <div class="panel-body">
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                <ul>
                @foreach($noticias as $noticia)
                    <li>
                        <h4><a href="{{ URL::to('noticia',[$noticia->id]) }}" class="linkNoticia">{{$noticia->titulo}}</a></h4>
                        <h6>{{$noticia->publicacion}}</h6>
                        <a href="{{ URL::to('noticia',[$noticia->id]) }}">	{{ HTML::image('src/noticias/miniaturas/'.$noticia->imagen, 'pumasruiz',array('class'=>'notImg')) }}</a>
                        <p class="noticiaP">{{$noticia->contenido}}</p>
                        <a href="{{ URL::to('noticia',[$noticia->id]) }}" class="seguirNoticia">Seguir leyendo</a>
                    </li><hr>
                @endforeach
                </ul>
            </div>	
        </div>
    </div>
</div>