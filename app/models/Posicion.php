<?php

class Posicion extends \Eloquent
{
	protected $table = 'posiciones';
	protected $fillable = [];

	public function scopeTabla($query)
	{
		$equipos = DB::table('equipos')->select('nombre','id',DB::raw('null'),'escudo');
		return $query
		->select('nombre','equipo_id', DB::raw('SUM(puntos) AS puntos'),'escudo')
		->leftJoin('equipos','posiciones.equipo_id','=','equipos.id')
		->groupBy('equipo_id')
		->orderBy('puntos','DESC')
		->orderBy('nombre','ASC')
		->union($equipos)
		->toSql();
	}

	public function equipo()
	{
		return $this->belongsTo('Equipo');
	}

	public function torneo()
	{
		return $this->belongsTo('Torneo');
	}
}