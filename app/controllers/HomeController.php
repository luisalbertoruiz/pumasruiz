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
		return View::make('home.index');
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
	 * muestra alguna noticia del equipo.
	 * GET /noticia
	 *
	 * @return Response
	 */
	public function noticias($id)
	{
		//$noticia = Noticia::find($id);
		return View::make('home.noticia');
		//->with('noticia', $noticia);
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
