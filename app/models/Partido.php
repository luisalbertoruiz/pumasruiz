<?php

class Partido extends \Eloquent {
	protected $fillable = [];
	public function scopePartidoEquipo ($query)
	{
		return $query
		->join('equipos','equipos.id','=','partidos.equipo_id')
		->select(
			'equipos.nombre AS nombre',
			'partidos.*'
			);
	}
}