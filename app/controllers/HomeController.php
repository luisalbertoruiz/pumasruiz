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
		$sql = Posicion::tabla();
		$posiciones = DB::table(DB::raw("($sql) AS a"))->select('a.*')
		->groupBy('nombre')->orderBy('puntos','DESC')->orderBy('nombre','ASC')->get();
		return View::make('home.index')
		->with('noticias',$noticias)
		->with('proximo',$proximo)
		->with('ultimo',$ultimo)
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
}
