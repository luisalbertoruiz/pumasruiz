<?php

class PartidosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /partidos
	 *
	 * @return Response
	 */
	public function index()
	{
		$partidos = Partido::orderBy('dia','DESC')->get();
		return View::make('partido.index')
		->with('partidos',$partidos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /partidos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$equipos = Equipo::where('categoria_id', '1')->lists('nombre','id');
		$torneos = Torneo::lists('nombre','id');
		$canchas = Cancha::lists('nombre','id');
		return View::make('partido.create')
		->with('equipos',$equipos)
		->with('torneos',$torneos)
		->with('canchas',$canchas);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /partidos
	 *
	 * @return Response
	 */
	public function store()
	{
		$partido = new Partido();
		$partido->equipo_id = Input::get('equipo_id');
		$partido->torneo_id = Input::get('torneo_id');
		$partido->cancha_id = Input::get('cancha_id');
		$partido->dia       = Input::get('dia');
		$partido->horario   = Input::get('horario');
		$partido->fecha     = Input::get('fecha');
		$partido->save();
		return Redirect::to('admin/partido')
		->with('alert-notice', 'Se ha agregado correctamente el partido.');
	}

	/**
	 * Display the specified resource.
	 * GET /partidos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$partido = Partido::find($id);
		return View::make('partido.show')
		->with('partido',$partido);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /partidos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$partido = Partido::find($id);
		$equipos = Equipo::lists('nombre','id');
		$torneos = Torneo::lists('nombre','id');
		$canchas = Cancha::lists('nombre','id');
		return View::make('partido.edit')
		->with('partido',$partido)
		->with('equipos',$equipos)
		->with('torneos',$torneos)
		->with('canchas',$canchas);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /partidos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$partido   = Partido::find($id);
		$partido->equipo_id = Input::get('equipo_id');
		$partido->torneo_id = Input::get('torneo_id');
		$partido->cancha_id = Input::get('cancha_id');
		$partido->dia       = Input::get('dia');
		$partido->horario   = Input::get('horario');
		$partido->fecha     = Input::get('fecha');
		$partido->save();
		return Redirect::to('admin/partido')
		->with('alert-warning', 'Se ha editado correctamente el partido.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /partidos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$partido = Partido::find($id);
		$partido->delete();
		return Redirect::to('admin/partido')
		->with('alert-error', 'Se ha eliminado correctamente el partido.');
	}

}