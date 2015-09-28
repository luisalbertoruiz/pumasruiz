<?php

class CategoriasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categorias
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = Categoria::all();
		return View::make('categoria.index')
		->with('categorias',$categorias);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categorias/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categoria.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categorias
	 *
	 * @return Response
	 */
	public function store()
	{
		$nombre = Str::title(Str::lower(Input::get('nombre')));
		$info   = Input::get('info');

		$datos = array(
			'nombre' => $nombre
			);
		$reglas = array(
			'nombre' => 'required'
			);
		$mensajes = array(
			'required' => 'El campo :attribute es obligatorio'
			);

		$validador = Validator::make($datos, $reglas, $mensajes);

		if ($validador->fails())
		{
		    return Redirect::to('admin/categoria/create')
			->withInput()->withErrors($validador);
		} else {
			$categoria = new Categoria();
			$categoria->nombre = $nombre;
			$categoria->info   = $info;
			$categoria->save();
			return Redirect::to('admin/categoria')
			->with('alert-success', 'Se ha agregado correctamente la categoria.');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /categorias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Redirect::to('admin/categoria');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /categorias/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$categoria = Categoria::find($id);
		return View::make('categoria.edit')
		->with('categoria',$categoria);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categorias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$nombre = Str::title(Str::lower(Input::get('nombre')));
		$info   = Input::get('info');

		$datos = array(
			'nombre' => $nombre
			);
		$reglas = array(
			'nombre' => 'required'
			);
		$mensajes = array(
			'required' => 'El campo :attribute es obligatorio'
			);

		$validador = Validator::make($datos, $reglas, $mensajes);

		if ($validador->fails())
		{
		    return Redirect::action('CategoriasController@edit', array('id' => $id))
			->withInput()->withErrors($validador);
		} else {
			$categoria   = Categoria::find($id);
			$categoria->nombre = $nombre;
			$categoria->info   = $info;
			$categoria->save();
			return Redirect::to('admin/categoria')
			->with('alert-success', 'Se ha editado correctamente la categoria.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categorias/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$categoria = Categoria::find($id);
		$categoria->delete();
		return Redirect::to('admin/categoria')
		->with('alert-success', 'Se ha eliminado correctamente la categoria.');
	}

}