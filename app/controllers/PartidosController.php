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
		$partidos = DB::table('partidos')->orderBy('fecha')->paginate(5);
		return View::make('partido.index')->with('partidos',$partidos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /partidos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('partido.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /partidos
	 *
	 * @return Response
	 */
	public function store()
	{
		$tipo = Input::get('tipo');
		$finicio = date_format(date_create(Input::get('finicio')),'y-m');
		$ffinal = date_format(date_create(Input::get('ffinal')),'y-m');
		$nombre = $tipo.' '.$finicio.'/'.$ffinal;
		$partido = new Partido();
		$partido->nombre         = $nombre;
		$partido->fechas         = Input::get('fechas');
		$partido->tipo           = $tipo;
		$partido->competicion    = Input::get('competicion');
		$partido->enfrentamiento = Input::get('enfrentamiento');
		$partido->finicio        = Input::get('finicio');
		$partido->ffinal         = Input::get('ffinal');
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
		return View::make('partido.show')->with('partido',$partido);
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
		return View::make('partido.edit')->with('partido',$partido);
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
		$partido->nombre         = $nombre;
		$partido->fechas         = Input::get('fechas');
		$partido->tipo           = Input::get('tipo');
		$partido->competicion    = Input::get('competicion');
		$partido->enfrentamiento = Input::get('enfrentamiento');
		$partido->finicio        = Input::get('finicio');
		$partido->ffinal         = Input::get('ffinal');
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