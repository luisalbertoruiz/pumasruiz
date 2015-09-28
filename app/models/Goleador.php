<?php

class Goleador extends \Eloquent {
	protected $table = 'goleadores';
	protected $fillable = [];

	public function jugador ()
	{
		return $this->belongsTo('Jugador');
	}

	public function partido ()
	{
		return $this->belongsTo('Partido');
	}
}