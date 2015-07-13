<?php

class CanchasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /canchas
	 *
	 * @return Response
	 */
	public function index()
	{
		$canchas = Cancha::all();
		return View::make('cancha.index')
		->with('canchas',$canchas);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /canchas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cancha.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /canchas
	 *
	 * @return Response
	 */
	public function store()
	{
		$cancha = new Cancha();
		$cancha->nombre   = Str::title(Str::lower(Input::get('nombre')));
		$cancha->locacion = Str::title(Str::lower(Input::get('locacion')));
		$cancha->info     = Input::get('info');
		$cancha->save();
		return Redirect::to('admin/cancha')
		->with('flash_notice', 'Se ha agregado correctamente el cancha.');
	}

	/**
	 * Display the specified resource.
	 * GET /canchas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cancha = Cancha::find($id);
		return View::make('cancha.show')->with('cancha',$cancha);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /canchas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cancha = Cancha::find($id);
		return View::make('cancha.edit')->with('cancha',$cancha);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /canchas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$cancha   = Cancha::find($id);
		$cancha->nombre   = Str::title(Str::lower(Input::get('nombre')));
		$cancha->locacion = Str::title(Str::lower(Input::get('locacion')));
		$cancha->info     = Input::get('info');
		$cancha->save();
		return Redirect::to('admin/cancha')
		->with('flash_warning', 'Se ha editado correctamente el cancha.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /canchas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cancha = Cancha::find($id);
		$cancha->delete();
		return Redirect::to('admin/cancha')
		->with('flash_error', 'Se ha eliminado correctamente el cancha.');
	}

}