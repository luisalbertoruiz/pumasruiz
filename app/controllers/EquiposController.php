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
		$equipos = Equipo::all();
		return View::make('equipo.index')
		->with('equipos',$equipos);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /equipos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$categorias = Categoria::lists('nombre','id');
		return View::make('equipo.create')
		->with('categorias',$categorias);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /equipos
	 *
	 * @return Response
	 */
	public function store()
	{
		$nombre  = Str::title(Str::lower(Input::get('nombre')));
		$alias   = Str::title(Str::lower(Input::get('alias')));
		$destino = public_path().'/src/escudos/';
		if (Input::file('escudo')) {
			$extension = Input::file('escudo')->getClientOriginalExtension();
			$escudo    = $nombre.'.'.$extension;
			$file      = Input::file('escudo');
			$file->move($destino,$escudo);
		} else {
			$escudo = 'default.png';
		}
		$equipo = new Equipo();
		$equipo->nombre       = $nombre;
		$equipo->alias        = $alias;
		$equipo->categoria_id = Input::get('categoria_id');
		$equipo->escudo       = $escudo;
		$equipo->save();
		return Redirect::to('admin/equipo')
		->with('alert-success', 'Se ha agregado correctamente el equipo.');
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
		return View::make('equipo.show')
		->with('equipo',$equipo);
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
		$categorias = Categoria::lists('nombre','id');
		return View::make('equipo.edit')
		->with('categorias',$categorias)
		->with('equipo',$equipo);
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
		$equipo = Equipo::find($id);
		$nombre = Str::title(Str::lower(Input::get('nombre')));
		$alias  = Str::title(Str::lower(Input::get('alias')));
		$destino  = public_path().'/src/escudos/';
		if (Input::file('escudo')) {
			$extension = Input::file('escudo')->getClientOriginalExtension();
			$escudo    = $nombre.'.'.$extension;
			$file      = Input::file('escudo');
			$file->move($destino,$escudo);
		} else {
			$escudo = $equipo->escudo;
		}
		$equipo->nombre       = $nombre;
		$equipo->alias        = $alias;
		$equipo->categoria_id = Input::get('categoria_id');
		$equipo->escudo       = $escudo;
		$equipo->save();
		return Redirect::to('admin/equipo')
		->with('alert-success', 'Se ha editado correctamente el equipo.');
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
		->with('alert-danger', 'Se ha eliminado correctamente el equipo.');
	}

}