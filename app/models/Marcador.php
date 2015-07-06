<?php

class Marcador extends \Eloquent {
	protected $table = 'marcadores';
	protected $fillable = [];

	public function scopeMarcadorPartido($query)
	{
		return $query
		->join('partidos','partidos.id','=','marcadores.partido_id')
		->join('equipos','equipos.id','=','partidos.equipo_id')
		->select(
			'partidos.equipo_id AS equipo_id',
			'partidos.torneo_id AS torneo',
			'partidos.dia AS dia',
			'equipos.nombre AS equipo',
			'marcadores.*'
			);
	}
}