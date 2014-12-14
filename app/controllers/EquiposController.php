<?php

class EquiposController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /equipos
	 *
	 * @return Response
	 */
	public function index()
	{
		$equipos = DB::table('equipos')->orderBy('nombre')->paginate(5);
		return View::make('equipo.index')->with('equipos',$equipos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /equipos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('equipo.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /equipos
	 *
	 * @return Response
	 */
	public function store()
	{
		$nombre   = Str::title(Str::lower(Input::get('nombre')));
		$snombre  = Str::title(Str::lower(Input::get('sobrenombre')));
		$destino  = public_path().'/src/escudos/';
		if (Input::file('escudo')) {
			$extension = Input::file('escudo')->getClientOriginalExtension();
			$escudo      = $nombre.'.'.$extension;
			$file      = Input::file('escudo');
			$file->move($destino,$escudo);
		}else{
			$escudo      = 'default.jpg';
		}
		$equipo = new Equipo();
		$equipo->nombre      = $nombre;
		$equipo->sobrenombre = $snombre;
		$equipo->division    = Input::get('division');
		$equipo->escudo      = $escudo;
		$equipo->save();
		return Redirect::to('admin/equipo')
		->with('flash_notice', 'Se ha agregado correctamente el equipo.');
	}

	/**
	 * Display the specified resource.
	 * GET /equipos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$equipo = Equipo::find($id);
		return View::make('equipo.show')->with('equipo',$equipo);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /equipos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$equipo = Equipo::find($id);
		return View::make('equipo.edit')->with('equipo',$equipo);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /equipos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$equipo   = Equipo::find($id);
		$nombre   = Str::title(Str::lower(Input::get('nombre')));
		$apellido = Str::title(Str::lower(Input::get('apellido')));
		$snombre  = Str::title(Str::lower(Input::get('sobrenombre')));
		$destino  = public_path().'/src/escudos/';
		if (Input::file('escudo')) {
			$extension = Input::file('escudo')->getClientOriginalExtension();
			$escudo      = $nombre.$apellido.'.'.$extension;
			$file      = Input::file('escudo');
			$file->move($destino,$escudo);
		}else{
			$escudo      = $equipo->escudo;
		}
		$equipo->nombre      = $nombre;
		$equipo->sobrenombre = $snombre;
		$equipo->division    = Input::get('division');
		$equipo->escudo      = $escudo;
		$equipo->save();
		return Redirect::to('admin/equipo')
		->with('flash_warning', 'Se ha editado correctamente el equipo.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /equipos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$equipo = Equipo::find($id);
		$equipo->delete();
		return Redirect::to('admin/equipo')
		->with('flash_error', 'Se ha eliminado correctamente el equipo.');
	}

}