<?php

class ResultadosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /resultados
	 *
	 * @return Response
	 */
	public function index()
	{
		$resultados = DB::table('resultados')
		->orderBy('fecha','DESC')
		->get();
		return View::make('resultado.index')
		->with('resultados',$resultados);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /resultados/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$equipos = DB::table('equipos')->where('division', 'Primera')->get();
		$torneos = DB::table('torneos')->get();
		return View::make('resultado.create')
		->with('equipos',$equipos)
		->with('torneos',$torneos);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /resultados
	 *
	 * @return Response
	 */
	public function store()
	{
		$resultado = new Resultado();
		$resultado->equipo_id = Input::get('equipo');
		$resultado->torneo_id = Input::get('torneo');
		$resultado->cancha    = Input::get('cancha');
		$resultado->dia       = Input::get('dia');
		$resultado->horario   = Input::get('horario');
		$resultado->fecha     = Input::get('fecha');
		$resultado->save();
		return Redirect::to('admin/resultado')
		->with('flash_notice', 'Se ha agregado correctamente el resultado.');
	}

	/**
	 * Display the specified resource.
	 * GET /resultados/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$resultado = Resultado::find($id);
		$equipo  = Equipo::find($resultado->equipo_id);
		$torneo  = Torneo::find($resultado->torneo_id);
		return View::make('resultado.show')
		->with('equipo',$equipo)
		->with('torneo',$torneo)
		->with('resultado',$resultado);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /resultados/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$resultado = Resultado::find($id);
		$equipo  = Equipo::find($resultado->equipo_id);
		$torneo  = Torneo::find($resultado->torneo_id);
		$equipos = DB::table('equipos')
		->where('division','Primera')
		->where('id','!=',$resultado->equipo_id)
		->get();
		$torneos = DB::table('torneos')
		->where('id','!=',$resultado->torneo_id)
		->get();
		$canchas = DB::table('canchas')
		->where('nombre','!=',$resultado->cancha)
		->get();
		return View::make('resultado.edit')
		->with('resultado',$resultado)
		->with('equipos',$equipos)
		->with('torneos',$torneos)
		->with('equipo',$equipo)
		->with('torneo',$torneo)
		->with('canchas',$canchas);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /resultados/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$resultado   = Resultado::find($id);
		$resultado->equipo_id = Input::get('equipo');
		$resultado->torneo_id = Input::get('torneo');
		$resultado->cancha    = Input::get('cancha');
		$resultado->dia       = Input::get('dia');
		$resultado->horario   = Input::get('horario');
		$resultado->fecha     = Input::get('fecha');
		$resultado->save();
		return Redirect::to('admin/resultado')
		->with('flash_warning', 'Se ha editado correctamente el resultado.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /resultados/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$resultado = Resultado::find($id);
		$resultado->delete();
		return Redirect::to('admin/resultado')
		->with('flash_error', 'Se ha eliminado correctamente el resultado.');
	}

}