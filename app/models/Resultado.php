<?php

class Resultado extends \Eloquent {
	protected $fillable = [];

	public function local()
	{
		return $this->belongsTo('Equipo', 'local_id'); 
	}

	public function visitante()
	{
		return $this->belongsTo('Equipo', 'visitante_id'); 
	}
}