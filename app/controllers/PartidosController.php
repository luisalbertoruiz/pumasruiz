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
		$partidos = DB::table('partidos')
		->orderBy('fecha')
		->paginate(5);
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
		$equipos = DB::table('equipos')->where('division', 'Primera')->get();
		$torneos = DB::table('torneos')->get();
		$canchas = DB::table('canchas')->get();
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
		$partido->equipo_id = Input::get('equipo');
		$partido->torneo_id = Input::get('torneo');
		$partido->cancha    = Input::get('cancha');
		$partido->dia       = Input::get('dia');
		$partido->horario   = Input::get('horario');
		$partido->fecha     = Input::get('fecha');
		$partido->save();
		return Redirect::to('admin/partido')
		->with('flash_warning', 'Se ha agregado correctamente el partido.');
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
		$equipo  = Equipo::find($id);
		$torneo  = Torneo::find($id);
		return View::make('partido.show')
		->with('equipo',$equipo)
		->with('torneo',$torneo)
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
		$equipo  = Equipo::find($id);
		$torneo  = Torneo::find($id);
		$equipos = DB::table('equipos')
		->where('division','Primera')
		->where('id','!=',$partido->equipo_id)
		->get();
		$torneos = DB::table('torneos')
		->where('id','!=',$partido->torneo_id)
		->get();
		$canchas = DB::table('canchas')
		->where('nombre','!=',$partido->cancha)
		->get();
		return View::make('partido.edit')
		->with('partido',$partido)
		->with('equipos',$equipos)
		->with('torneos',$torneos)
		->with('equipo',$equipo)
		->with('torneo',$torneo)
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
		$partido->equipo_id = Input::get('equipo');
		$partido->torneo_id = Input::get('torneo');
		$partido->cancha    = Input::get('cancha');
		$partido->dia       = Input::get('dia');
		$partido->horario   = Input::get('horario');
		$partido->fecha     = Input::get('fecha');
		$partido->save();
		return Redirect::to('admin/partido')
		->with('flash_warning', 'Se ha editado correctamente el partido.');
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
		->with('flash_warning', 'Se ha eliminado correctamente el partido.');
	}

}