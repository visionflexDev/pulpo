<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regente extends Model
{
    protected $fillable = [
        'optica_id','nombre','paterno','materno','identificacion','codSede','matricula','titAcad','provNac','regSede','ciudad_id','direccion','telefono','Celular','stat','nivAcad', 'titProf' ,'estado',
    	
    ];
    //
        // 
	public function regente(){
		return $this-> hasOne('App\regente','id','optica_id');
	}

}
