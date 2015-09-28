<?php

class GoleadoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /goleadores
	 *
	 * @return Response
	 */
	public function index()
	{
		$goleadores = Goleador::all();
		return View::make('goleador.index')
		->with('goleadores',$goleadores);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /goleadores/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$goles = array();
		for ($i=1; $i < 11; $i++) {
			$goles[$i] = $i;
		}
		$partidos = Partido::partidos()->get()->lists('nombre','id');
		$jugadores = Jugador::nombreCompleto()->get()->lists('nombre','id');
		return View::make('goleador.create')
		->with('goles',$goles)
		->with('jugadores',$jugadores)
		->with('partidos',$partidos);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /goleadores
	 *
	 * @return Response
	 */
	public function store()
	{
		$goleador = new Goleador();
		$goleador->jugador_id = Input::get('jugador_id');
		$goleador->partido_id = Input::get('partido_id');
		$goleador->goles      = Input::get('goles');
		$goleador->save();
		return Redirect::to('admin/goleador')
		->with('alert-success', 'Se han registrado correctamente los goles.');

	}

	/**
	 * Display the specified resource.
	 * GET /goleadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('goleador.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /goleadores/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goleador = Goleador::find($id);
		$goles = array();
		for ($i=1; $i < 11; $i++) {
			$goles[$i] = $i;
		}
		$partidos = Partido::partidos()->get()->lists('nombre','id');
		$jugadores = Jugador::nombreCompleto()->get()->lists('nombre','id');
		return View::make('goleador.edit')
		->with('partidos',$partidos)
		->with('jugadores',$jugadores)
		->with('goles',$goles)
		->with('goleador',$goleador);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /goleadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goleador = Goleador::find($id);
		$goleador->jugador_id = Input::get('jugador_id');
		$goleador->partido_id = Input::get('partido_id');
		$goleador->goles = Input::get('goles');
		$goleador->save();
		return Redirect::to('admin/goleador')
		->with('alert-success', 'Se han modificado correctamente los goles.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /goleadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$goleador = Goleador::find($id);
		$goleador->delete();
		return Redirect::to('admin/goleador')
		->with('alert-success', 'Se ha eliminado correctamente el goleador.');
	}

}