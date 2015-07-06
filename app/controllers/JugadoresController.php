<?php

class JugadoresController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /jugadores
	 *
	 * @return Response
	 */
	public function index()
	{
		$jugadores = DB::table('jugadores')->orderBy('playera')->get();
		return View::make('jugador.index')->with('jugadores',$jugadores);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jugadores/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('jugador.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /jugadores
	 *
	 * @return Response
	 */
	public function store()
	{
		$nombre   = Str::title(Str::lower(Input::get('nombre')));
		$apellido = Str::title(Str::lower(Input::get('apellido')));
		$snombre  = Str::title(Str::lower(Input::get('sobrenombre')));
		$destino  = public_path().'/src/fotos/';
		if (Input::file('foto')) {
			$extension = Input::file('foto')->getClientOriginalExtension();
			$foto      = $nombre.$apellido.'.'.$extension;
			$file      = Input::file('foto');
			$file->move($destino,$foto);
		}else{
			$foto      = 'default.jpg';
		}
		$jugador = new Jugador();
		$jugador->nombre      = $nombre;
		$jugador->apellido    = $apellido;
		$jugador->sobrenombre = $snombre;
		$jugador->posicion    = Input::get('posicion');
		$jugador->playera     = Input::get('playera');
		$jugador->telefono    = Input::get('telefono');
		$jugador->celular     = Input::get('celular');
		$jugador->direccion   = Input::get('direccion');
		$jugador->email       = Input::get('email');
		$jugador->foto        = $foto;
		$jugador->save();
		return Redirect::to('admin/jugador')
		->with('flash_notice', 'Se ha agregado correctamente el jugador.');
	}

	/**
	 * Display the specified resource.
	 * GET /jugadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$jugador = Jugador::find($id);
		return View::make('jugador.show')->with('jugador',$jugador);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /jugadores/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jugador = Jugador::find($id);
		return View::make('jugador.edit')->with('jugador',$jugador);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /jugadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$jugador  = Jugador::find($id);
		$nombre   = Str::title(Str::lower(Input::get('nombre')));
		$apellido = Str::title(Str::lower(Input::get('apellido')));
		$snombre  = Str::title(Str::lower(Input::get('sobrenombre')));
		$destino  = public_path().'/src/fotos/';
		if (Input::file('foto')) {
			$extension = Input::file('foto')->getClientOriginalExtension();
			$foto      = $nombre.$apellido.'.'.$extension;
			$file      = Input::file('foto');
			$file->move($destino,$foto);
		}else{
			$foto      = $jugador->foto;
		}
		$jugador->nombre      = $nombre;
		$jugador->apellido    = $apellido;
		$jugador->sobrenombre = $snombre;
		$jugador->posicion    = Input::get('posicion');
		$jugador->playera     = Input::get('playera');
		$jugador->telefono    = Input::get('telefono');
		$jugador->celular     = Input::get('celular');
		$jugador->direccion   = Input::get('direccion');
		$jugador->email       = Input::get('email');
		$jugador->foto        = $foto;
		$jugador->save();
		return Redirect::to('admin/jugador')
		->with('flash_warning', 'Se ha editado correctamente el jugador.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /jugadores/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$jugador = Jugador::find($id);
		$jugador->delete();
		return Redirect::to('admin/jugador')
		->with('flash_error', 'Se ha eliminado correctamente el jugador.');
	}

}