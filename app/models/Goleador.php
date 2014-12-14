<?php

class Goleador extends \Eloquent {
	protected $table = 'goleadores';
	protected $fillable = [];
	public function scopeGoleadorJugador ($query)
	{
		return $query
		->join('jugadores','jugadores.id','=','goleadores.jugador_id')
		->join('partidos','partidos.id','=','goleadores.partido_id')
		->join('equipos','equipos.id','=','partidos.id')
		->select(
			'equipos.nombre AS equipo',
			'partidos.dia AS dia',
			'jugadores.nombre AS nombre',
			'jugadores.apellido AS apellido',
			'goleadores.*'
			);
	}
}