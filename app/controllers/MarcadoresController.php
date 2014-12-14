<?php

class MarcadoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /marcadores
	 *
	 * @return Response
	 */
	public function index()
	{
		$marcadores = Marcador::marcadorPartido()
		->orderBy('dia','DESC')->paginate(5);
		return View::make('marcador.index')
		->with('marcadores',$marcadores);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /marcadores/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$partidos = Partido::partidoEquipo()->orderBy('dia','DESC')->get();
		return View::make('marcador.create')
		->with('partidos',$partidos);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /marcadores
	 *
	 * @return Response
	 */
	public function store()
	{
		$marcador = new Marcador();
		$marcador->partido_id = Input::get('partido');
		$marcador->goles_f    = Input::get('goles_f');
		$marcador->goles_c    = Input::get('goles_c');
		$marcador->save();
		return Redirect::to('admin/marcador')
		->with('flash_notice', 'Se ha agregado correctamente el marcador.');
	}

	/**
	 * Display the specified resource.
	 * GET /marcadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$marcador = Marcador::find($id);
		$partido  = Partido::find($marcador->partido_id);
		$equipo  = Equipo::find($partido->equipo_id);
		return View::make('marcador.show')
		->with('partido',$partido)
		->with('equipo',$equipo)
		->with('marcador',$marcador);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /marcadores/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$marcador = Marcador::find($id);
		$partido = Partido::find($marcador->partido_id);
		$equipo = Equipo::find($partido->equipo_id);
		return View::make('marcador.edit')
		->with('partido',$partido)
		->with('equipo',$equipo)
		->with('marcador',$marcador);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /marcadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$marcador = Marcador::find($id);
		$marcador->partido_id = $marcador->id;
		$marcador->goles_f    = Input::get('goles_f');
		$marcador->goles_c    = Input::get('goles_c');
		$marcador->save();
		return Redirect::to('admin/marcador')
		->with('flash_warning', 'Se ha editado correctamente el marcador.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /marcadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$marcador = Marcador::find($id);
		$marcador->delete();
		return Redirect::to('admin/marcador')
		->with('flash_error', 'Se ha eliminado correctamente el marcador.');
	}

}