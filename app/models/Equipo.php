<?php

class Equipo extends \Eloquent {
	protected $fillable = [];

	public function scopeVisitantes($query, $id){
		return $query->whereNotIn('id',$id);

	}
}