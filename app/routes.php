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
// Home
Route::get  ('/','HomeController@index');
Route::get  ('/jugadores','HomeController@players');
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


