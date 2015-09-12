<?php

class Torneo extends \Eloquent {
	protected $fillable = [];

	public function enfrentamiento()
	{
		return $this->belongsTo('Catalogo','enfrentamiento_id');
	}

	public function competicion()
	{
		return $this->belongsTo('Catalogo','competicion_id');
	}

	public function tipo()
	{
		return $this->belongsTo('Catalogo','tipoTorneo_id');
	}
}
