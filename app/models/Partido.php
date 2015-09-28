<?php

class Partido extends \Eloquent {
	protected $fillable = [];

	public function scopeUltimoPartido($query)
	{
		return $query
		->Join('marcadores','marcadores.partido_id','=','partidos.id')
		->where('dia','<=',date('Y-m-d'))
		->orderBy('dia','DESC')
		->limit(1);;
	}

	public function scopeProximoPartido($query)
	{
		return $query
		->where('dia','>=',date('Y-m-d'))
		->orderBy('dia','ASC')
		->limit(1);
	}

	public function scopePartidoEquipo($query)
	{
		$registrados = DB::table('marcadores')->select('partido_id')->lists('partido_id');
		return $query
		->leftJoin('equipos','equipos.id','=','partidos.equipo_id')
		->select(
			DB::raw('CONCAT(equipos.nombre,"-",partidos.dia) AS nombre'),
			'partidos.id'
			)
		->whereNotIn('partidos.id',$registrados)
		->orderBy('dia','DESC');
 	}

 	public function scopePartidos($query)
	{
		return $query
		->leftJoin('equipos','equipos.id','=','partidos.equipo_id')
		->select(
			DB::raw('CONCAT(equipos.nombre,"-",partidos.dia) AS nombre'),
			'partidos.id'
			)
		->orderBy('partidos.dia','DESC');
 	}

	public function equipo()
	{
		return $this->belongsTo('Equipo');
	}

	public function cancha()
	{
		return $this->belongsTo('Cancha');
	}
	
	public function torneo()
	{
		return $this->belongsTo('Torneo');
	}
}