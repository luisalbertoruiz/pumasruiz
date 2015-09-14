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
Route::get  ('/galeria','HomeController@gallery');
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
	Route::get     ('/admin/jugador/{id}/baja', 'JugadoresController@baja');
	Route::resource('/admin/slider', 'SlidersController');
	Route::resource('/admin/galeria', 'GaleriasController');
	Route::resource('/admin/partido','PartidosController');
	Route::resource('/admin/goleador','GoleadoresController');
	Route::resource('/admin/marcador','MarcadoresController');
	Route::resource('/admin/posicion','PosicionesController');
	Route::resource('/admin/resultado','ResultadosController');
	Route::get  ('/admin/resultado/visitantes/{id}','ResultadosController@visitantes');
	Route::get  ('/admin/resultado/fecha/{id}','ResultadosController@fecha');
});
