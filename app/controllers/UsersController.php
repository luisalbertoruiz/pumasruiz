<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

		/**
	 * Valida los datos de logueo.
	 * POST /users
	 *
	 * @return Response
	 */
	public function loged()
	{
		try
		{
		    // Login credentials
		    $credentials = array(
				'username' => Input::get('username'),
				'password' => Input::get('password')
		    );

		    // Authenticate the user
		    $user = Sentry::authenticate($credentials, false);
		    return Redirect::to('/admin/jugador')->with('alert-success','Bienvenido al area de Administración.');
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			return Redirect::to('/login')->with('alert-warning','Nombre de Usuario requerido.');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return Redirect::to('/login')->with('alert-warning','Contraseña requerida.');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			return Redirect::to('/login')->with('alert-warning','Contraseña incorrecta, intentalo de nuevo.');
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::to('/login')->with('alert-warning','El Usuario no fue encontrado.');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			return Redirect::to('/login')->with('alert-warning','El Usuario no esta activo.');
		}
	}

	/**
	 * Termina la sesion actual.
	 * GET /users
	 *
	 * @return Response
	 */
	public function logout()
	{
		Sentry::logout();
		return Redirect::to('/login')->with('alert-success','Hasta luego.');
	}

}