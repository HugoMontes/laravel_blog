<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Director extends Model{
  protected $table='directores';
  protected $fillable=['nombre'];

  // Un director tiene muchas peliculas
  public function peliculas(){
    return $this->belongsToMany('Cinema\Pelicula');
  }
}