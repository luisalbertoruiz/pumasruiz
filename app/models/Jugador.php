<?php

class Jugador extends \Eloquent {
	protected $table = 'jugadores';
	protected $fillable = [];
	public function posicion()
	{
		return $this->belongsTo('Catalogo','posicion_id');
	}
}