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

Route::get ('/', [
	'as'   => 'home',
	'uses' => 'HomeController@index']);

Route::get ('/admin/jugador', [
	'as'   => 'adminJugador',
	'uses' => 'JugadoresController@index']);

Route::get ('/admin/jugador/crear', [
	'as'   => 'adminJugadorCrear',
	'uses' => 'JugadoresController@create']);

Route::get ('/admin/jugador/editar', [
	'as'   => 'adminJugadorEditar',
	'uses' => 'JugadoresController@edit']);

