<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
App::missing(function($exeption){
return Response::view('error.error404');
});
App::after(function($request, $response)
{
$response->headers->set('Cache-Control','nocache, no-store, max-age=0, must-revalidate');
$response->headers->set('Pragma','no-cache');
$response->headers->set('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
});
// Home
Route::get  ('/','HomeController@index');
Route::get  ('/jugadores','HomeController@players');
Route::get  ('/login','HomeController@login');
Route::post ('/loged', 'UsersController@loged');
Route::get  ('/logout', 'UsersController@logout');
// Grupo Administrador
Route::group(array('before' => 'Sentry|inGroup:admin'), function(){
// Jugadores
Route::get  ('/admin/jugador','JugadoresController@index');
Route::get  ('/admin/jugador/crear','JugadoresController@create');
Route::post ('/admin/jugador/guardar','JugadoresController@store');
Route::get  ('/admin/jugador/mostrar/{id}','JugadoresController@show');
Route::get  ('/admin/jugador/editar/{id}','JugadoresController@edit');
Route::post ('/admin/jugador/actualizar/{id}','JugadoresController@update');
Route::get  ('/admin/jugador/eliminar/{id}','JugadoresController@destroy');
// Equipos
Route::get  ('/admin/equipo','EquiposController@index');
Route::get  ('/admin/equipo/crear','EquiposController@create');
Route::post ('/admin/equipo/guardar','EquiposController@store');
Route::get  ('/admin/equipo/mostrar/{id}','EquiposController@show');
Route::get  ('/admin/equipo/editar/{id}','EquiposController@edit');
Route::post ('/admin/equipo/actualizar/{id}','EquiposController@update');
Route::get  ('/admin/equipo/eliminar/{id}','EquiposController@destroy');
// Torneos
Route::get  ('/admin/torneo','TorneosController@index');
Route::get  ('/admin/torneo/crear','TorneosController@create');
Route::post ('/admin/torneo/guardar','TorneosController@store');
Route::get  ('/admin/torneo/mostrar/{id}','TorneosController@show');
Route::get  ('/admin/torneo/editar/{id}','TorneosController@edit');
Route::post ('/admin/torneo/actualizar/{id}','TorneosController@update');
Route::get  ('/admin/torneo/eliminar/{id}','TorneosController@destroy');
// Partidos
Route::get  ('/admin/partido','PartidosController@index');
Route::get  ('/admin/partido/crear','PartidosController@create');
Route::post ('/admin/partido/guardar','PartidosController@store');
Route::get  ('/admin/partido/mostrar/{id}','PartidosController@show');
Route::get  ('/admin/partido/editar/{id}','PartidosController@edit');
Route::post ('/admin/partido/actualizar/{id}','PartidosController@update');
Route::get  ('/admin/partido/eliminar/{id}','PartidosController@destroy');
// Goleadores
Route::get  ('/admin/goleador','GoleadoresController@index');
Route::get  ('/admin/goleador/crear','GoleadoresController@create');
Route::post ('/admin/goleador/guardar','GoleadoresController@store');
Route::get  ('/admin/goleador/mostrar/{id}','GoleadoresController@show');
Route::get  ('/admin/goleador/editar/{id}','GoleadoresController@edit');
Route::post ('/admin/goleador/actualizar/{id}','GoleadoresController@update');
Route::get  ('/admin/goleador/eliminar/{id}','GoleadoresController@destroy');
// Marcadores
Route::get  ('/admin/marcador','MarcadoresController@index');
Route::get  ('/admin/marcador/crear','MarcadoresController@create');
Route::post ('/admin/marcador/guardar','MarcadoresController@store');
Route::get  ('/admin/marcador/mostrar/{id}','MarcadoresController@show');
Route::get  ('/admin/marcador/editar/{id}','MarcadoresController@edit');
Route::post ('/admin/marcador/actualizar/{id}','MarcadoresController@update');
Route::get  ('/admin/marcador/eliminar/{id}','MarcadoresController@destroy');
// Posiciones
Route::get  ('/admin/posicion','PosicionesController@index');
Route::get  ('/admin/posicion/crear','PosicionesController@create');
Route::post ('/admin/posicion/guardar','PosicionesController@store');
Route::get  ('/admin/posicion/mostrar/{id}','PosicionesController@show');
Route::get  ('/admin/posicion/editar/{id}','PosicionesController@edit');
Route::post ('/admin/posicion/actualizar/{id}','PosicionesController@update');
Route::get  ('/admin/posicion/eliminar/{id}','PosicionesController@destroy');
// Canchas
Route::get  ('/admin/cancha','CanchasController@index');
Route::get  ('/admin/cancha/crear','CanchasController@create');
Route::post ('/admin/cancha/guardar','CanchasController@store');
Route::get  ('/admin/cancha/mostrar/{id}','CanchasController@show');
Route::get  ('/admin/cancha/editar/{id}','CanchasController@edit');
Route::post ('/admin/cancha/actualizar/{id}','CanchasController@update');
Route::get  ('/admin/cancha/eliminar/{id}','CanchasController@destroy');
});
Route::group(array('before' => 'Sentry|inGroup:users'), function(){});
// Sentry 2
/*Route::get('sentry', function()
{
	$groupA = Sentry::createGroup([
		'name'        => 'administrador',
		'permissions' =>[
		'admin'       => 1,
		'users'       => 1,
		],
		]);
	$groupU = Sentry::createGroup([
		'name'        => 'usuario',
		'permissions' =>[
		'admin'       => 0,
		'users'       => 1,
		],
		]);
	$admin = Sentry::createUser([
		'email'      => 'admin@sga.com',
		'username'   => 'admin',
		'password'   => 'admin',
		'first_name' => 'Administrador',
		'last_name'  => 'General',
		'activated'  => 1,
		]);
	$user = Sentry::createUser([
		'email'      => 'user@sga.com',
		'username'   => 'user',
		'password'   => 'user',
		'first_name' => 'Usuario',
		'last_name'  => 'Estandar',
		'activated'  => 1,
		]);
	$admin->addGroup($groupA);
	$user->addGroup($groupU);
	
	return 'todo se genero correctamente';
});*/