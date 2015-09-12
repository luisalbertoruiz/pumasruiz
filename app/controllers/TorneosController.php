<?php

class TorneosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /torneos
	 *
	 * @return Response
	 */
	public function index()
	{
		$torneos = Torneo::all();
		return View::make('torneo.index')
		->with('torneos',$torneos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /torneos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$competiciones   = DB::table('catalogo')->where('metacatalogo_id', '1')->lists('nombre','id');
		$enfrentamientos = DB::table('catalogo')->where('metacatalogo_id', '2')->lists('nombre','id');
		$tipos           = DB::table('catalogo')->where('metacatalogo_id', '3')->lists('nombre','id');
		return View::make('torneo.create')
		->with('competiciones',$competiciones)
		->with('enfrentamientos',$enfrentamientos)
		->with('tipos',$tipos);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /torneos
	 *
	 * @return Response
	 */
	public function store()
	{
		$tipoId                    = Input::get('tipoTorneo_id');
		$nombre                    = Catalogo::find($tipoId);
		$finicio                   = date_format(date_create(Input::get('finicio')),'y-m');
		$ffinal                    = date_format(date_create(Input::get('ffinal')),'y-m');
		$nombre                    = $nombre->nombre.' '.$finicio.'/'.$ffinal;
		$torneo                    = new Torneo();
		$torneo->nombre            = $nombre;
		$torneo->fechas            = Input::get('fechas');
		$torneo->tipoTorneo_id     = Input::get('tipoTorneo_id');
		$torneo->competicion_id    = Input::get('competicion_id');
		$torneo->enfrentamiento_id = Input::get('enfrentamiento_id');
		$torneo->finicio           = Input::get('finicio');
		$torneo->ffinal            = Input::get('ffinal');
		$torneo->save();
		return Redirect::to('admin/torneo')
		->with('flash_notice', 'Se ha agregado correctamente el torneo.');
	}

	/**
	 * Display the specified resource.
	 * GET /torneos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$torneo = Torneo::find($id);
		return View::make('torneo.show')
		->with('torneo',$torneo);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /torneos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$competiciones   = DB::table('catalogo')->where('metacatalogo_id', '1')->lists('nombre','id');
		$enfrentamientos = DB::table('catalogo')->where('metacatalogo_id', '2')->lists('nombre','id');
		$tipos           = DB::table('catalogo')->where('metacatalogo_id', '3')->lists('nombre','id');
		$torneo = Torneo::find($id);
		return View::make('torneo.edit')
		->with('competiciones',$competiciones)
		->with('enfrentamientos',$enfrentamientos)
		->with('tipos',$tipos)
		->with('torneo',$torneo);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /torneos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tipoId                    = Input::get('tipoTorneo_id');
		$nombre                    = Catalogo::find($tipoId);
		$finicio                   = date_format(date_create(Input::get('finicio')),'y-m');
		$ffinal                    = date_format(date_create(Input::get('ffinal')),'y-m');
		$nombre                    = $nombre->nombre.' '.$finicio.'/'.$ffinal;
		$torneo                    = Torneo::find($id);
		$torneo->nombre            = $nombre;
		$torneo->fechas            = Input::get('fechas');
		$torneo->tipoTorneo_id     = Input::get('tipoTorneo_id');
		$torneo->competicion_id    = Input::get('competicion_id');
		$torneo->enfrentamiento_id = Input::get('enfrentamiento_id');
		$torneo->finicio           = Input::get('finicio');
		$torneo->ffinal            = Input::get('ffinal');
		$torneo->save();
		return Redirect::to('admin/torneo')
		->with('flash_warning', 'Se ha editado correctamente el torneo.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /torneos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$torneo = Torneo::find($id);
		$torneo->delete();
		return Redirect::to('admin/torneo')
		->with('flash_error', 'Se ha eliminado correctamente el torneo.');
	}

}