<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Optica;

class Ciudad extends Model
{
	// autogenere los modelos unto con las migraciones y los controladores
	// eso es lo maque en las migraciones
    //
   	protected $table = 'ciudads';
    protected $fillable = [ 'name','description', ];
public function ciudad(){
	return $this->hasMany('App\Optica');
	// Asi va?
	// MM SI CREO
}
}

