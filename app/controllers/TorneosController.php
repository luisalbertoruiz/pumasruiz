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
		$torneos = DB::table('torneos')->orderBy('finicio')->paginate(5);
		return View::make('torneo.index')->with('torneos',$torneos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /torneos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('torneo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /torneos
	 *
	 * @return Response
	 */
	public function store()
	{
		$tipo = Input::get('tipo');
		$finicio = date_format(date_create(Input::get('finicio')),'y-m');
		$ffinal = date_format(date_create(Input::get('ffinal')),'y-m');
		$nombre = $tipo.' '.$finicio.'/'.$ffinal;
		$torneo = new Torneo();
		$torneo->nombre         = $nombre;
		$torneo->fechas         = Input::get('fechas');
		$torneo->tipo           = $tipo;
		$torneo->competicion    = Input::get('competicion');
		$torneo->enfrentamiento = Input::get('enfrentamiento');
		$torneo->finicio        = Input::get('finicio');
		$torneo->ffinal         = Input::get('ffinal');
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
		return View::make('torneo.show')->with('torneo',$torneo);
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
		$torneo = Torneo::find($id);
		return View::make('torneo.edit')->with('torneo',$torneo);
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
		$tipo = Input::get('tipo');
		$finicio = date_format(date_create(Input::get('finicio')),'y-m');
		$ffinal = date_format(date_create(Input::get('ffinal')),'y-m');
		$nombre = $tipo.' '.$finicio.'/'.$ffinal;
		$torneo   = Torneo::find($id);
		$torneo->nombre         = $nombre;
		$torneo->fechas         = Input::get('fechas');
		$torneo->tipo           = Input::get('tipo');
		$torneo->competicion    = Input::get('competicion');
		$torneo->enfrentamiento = Input::get('enfrentamiento');
		$torneo->finicio        = Input::get('finicio');
		$torneo->ffinal         = Input::get('ffinal');
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