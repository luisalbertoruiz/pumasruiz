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
}
