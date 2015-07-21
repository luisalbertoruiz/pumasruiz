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
return Response::view('layout.error404');
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
Route::get  ('/noticia/{id}','HomeController@noticias');
Route::get  ('/login','HomeController@login');
Route::post ('/loged', 'UsersController@loged');
Route::get  ('/logout', 'UsersController@logout');
// Administracion
Route::group(array('before' => 'Sentry|inGroup:admin'), function(){
	Route::resource('/admin/cancha', 'CanchasController');
	Route::resource('/admin/categoria', 'CategoriasController');
	Route::resource('/admin/equipo', 'EquiposController');
	Route::resource('/admin/torneo', 'TorneosController');
	Route::resource('/admin/noticia', 'NoticiasController');
	Route::resource('/admin/jugador', 'JugadoresController');
	Route::resource('/admin/partido','PartidosController@index');
	Route::resource('/admin/goleador','GoleadoresController@index');
	Route::resource('/admin/marcador','MarcadoresController@index');
	Route::resource('/admin/posicion','PosicionesController@index');
	Route::resource('/admin/resultado','ResultadosController@index');
	Route::get  ('/admin/resultado/visitantes/{id}','ResultadosController@visitantes');
	Route::get  ('/admin/resultado/fecha/{id}','ResultadosController@fecha');
});

/*Route::group(array('before' => 'Sentry|inGroup:users'), function(){});
// Sentry 2
Route::get('sentry', function()
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
});