<?php

class Equipo extends \Eloquent {
	protected $fillable = [];

	public function scopeVisitantes($query, $id){
		return $query->whereNotIn('id',$id);
	}

	public function categoria() {
		return $this->belongsTo('Categoria');
	}
}