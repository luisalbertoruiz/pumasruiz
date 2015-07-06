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
		$goleadores = Goleador::goleadorJugador()->paginate(5);
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
		$partidos = Partido::partidoEquipo()->orderBy('dia','DESC')->get();
		$jugadores = Jugador::all();
		return View::make('goleador.create')
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
		$goleador->jugador_id = Input::get('jugador');
		$goleador->partido_id = Input::get('partido');
		$goleador->goles      = Input::get('goles');
		$goleador->save();
		return Redirect::to('admin/goleador')
		->with('flash_notice', 'Se han registrado correctamente los goles.');

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
		$partido = Partido::find($goleador->partido_id);
		$jugador = Jugador::find($goleador->jugador_id);
		$equipo = Equipo::find($partido->equipo_id);
		return View::make('goleador.edit')
		->with('partido',$partido)
		->with('jugador',$jugador)
		->with('equipo',$equipo)
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
		$goleador->goles      = Input::get('goles');
		$goleador->save();
		return Redirect::to('admin/goleador')
		->with('flash_warning', 'Se han modificado correctamente los goles.');
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
		->with('flash_error', 'Se ha eliminado correctamente el goleador.');
	}

}