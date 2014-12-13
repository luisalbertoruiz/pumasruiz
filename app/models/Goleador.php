<?php

class Goleador extends \Eloquent {
	protected $table = 'goleadores';
	protected $fillable = [];
	public function scopeGoleadorJugador ($query)
	{
		return $query
		->join('jugadores','jugadores.id','=','goleadores.jugador_id')
		->select(
			'jugadores.nombre AS nombre',
			'jugadores.apellido AS apellido',
			'goleadores.*'
			);
	}
}