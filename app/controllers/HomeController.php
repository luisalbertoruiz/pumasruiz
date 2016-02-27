<?php

class HomeController extends BaseController {

    /**
     * Muestra la pagina principal.
     * GET /
     *
     * @return Response
     */
    public function index()
    {
        $noticias   = Noticia::orderBy('publicacion','desc')->limit(5)->get();
        $proximo    = Partido::proximoPartido()->first();
        $ultimo     = Partido::ultimoPartido()->first();
        $fecha      = Posicion::orderBy('fecha','DESC')->limit(1)->first();
        $sql = Posicion::tabla();
        $posiciones = DB::table(DB::raw("($sql) AS a"))->select('a.*')
        ->groupBy('nombre')->orderBy('puntos','DESC')->orderBy('nombre','ASC')->get();
        return View::make('home.index')
        ->with('noticias',$noticias)
        ->with('proximo',$proximo)
        ->with('ultimo',$ultimo)
        ->with('fecha',$fecha)
        ->with('posiciones',$posiciones);
    }

    /**
     * muestra todos los jugadores del equipo.
     * GET /jugadores
     *
     * @return Response
     */
    public function players()
    {
        return View::make('home.index');
    }

    /**
     * muestra todos los jugadores del equipo.
     * GET /jugadores
     *
     * @return Response
     */
    public function gallery()
    {
        return View::make('home.gallery');
    }


    /**
     * muestra alguna noticia del equipo.
     * GET /noticia
     *
     * @return Response
     */
    public function noticias()
    {
        //$noticia = Noticia::find($id);
        return View::make('home.noticias');
        //->with('noticia', $noticia);
    }

    /**
     * muestra alguna noticia del equipo.
     * GET /noticia
     *
     * @return Response
     */
    public function noticia($id)
    {
        $noticia = Noticia::find($id);
        return View::make('home.noticia')
        ->with('noticia', $noticia);
    }

    /**
     * muestra todos los jugadores del equipo.
     * GET /jugadores
     *
     * @return Response
     */
    public function login()
    {
        return View::make('home.login');
    }

    public function estadisticas()
    {
        $posiciones = DB::table(DB::raw('marcadores m'))
                    ->select(array(
                    DB::raw('m.*, partidos.*, equipos.nombre AS equipo'),
                    DB::raw('(SELECT COUNT(*) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha) AS jj'),
					DB::raw('(SELECT COUNT(*) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha AND x.goles_f > x.goles_c) AS jg'),
					DB::raw('(SELECT COUNT(*) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha AND x.goles_f = x.goles_c) AS je'),
					DB::raw('(SELECT COUNT(*) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha AND x.goles_f < x.goles_c) AS jp'),
					DB::raw('((SELECT SUM(IF(goles_f > goles_c,3,0)) FROM marcadores x WHERE m.id = x.id)+(SELECT SUM(IF(goles_f = goles_c,1,0)) FROM marcadores x WHERE m.id = x.id)) AS pg'),
					DB::raw('((SELECT SUM(IF(goles_f > goles_c,3,0)) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha)+(SELECT SUM(IF(goles_f = goles_c,1,0)) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha)) AS pga'),
					DB::raw('(SELECT SUM(goles_f) FROM marcadores x WHERE m.id = x.id) AS gf'),
					DB::raw('(SELECT SUM(goles_c) FROM marcadores x WHERE m.id = x.id) AS gc'),
					DB::raw('((SELECT SUM(goles_f) FROM marcadores x WHERE m.id = x.id)-(SELECT SUM(goles_c) FROM marcadores x WHERE m.id = x.id)) AS dg'),
					DB::raw('(SELECT SUM(goles_f) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha) AS gfa'),
					DB::raw('(SELECT SUM(goles_c) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha) AS gca'),
					DB::raw('((SELECT SUM(goles_f) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha)-(SELECT SUM(goles_c) FROM marcadores x LEFT JOIN partidos p ON partido_id = p.id WHERE p.fecha <= partidos.fecha)) AS dga')))
                    ->leftJoin('partidos', 'partido_id', '=', 'partidos.id')
                    ->leftJoin('equipos', 'equipo_id', '=', 'equipos.id')
                    ->orderBy('dia', 'ASC')->get();
        // echo "<pre>";
        // var_dump($posiciones);exit;
        return View::make('estadisticas.posiciones')
        ->with('posiciones', $posiciones);
    }
}
