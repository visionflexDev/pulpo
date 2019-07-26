<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ciudad;
class Optica extends Model
{
    //
     protected $fillable = [
          'nombreOptica', 'razonSocial', 'nit','direccion','celular','Telefono','ciudad_id','sucursal','optPrincipal','observacion','status','ingresoSede','actSede','resolucion' ,'estado',
    
    ];
    //AQUI TIENES QUE COLOCAR LA RELACION
    // ES UNA ERLACION DE UNO A MUCHOS
    // ES UNO A UNO 
    // Y TENGO OTRAS QUE SON UNO A MUCOS
    // EL 
    // ID DE CIUDAD ESTA EN OPTICA???SIP
    // ENTONCES ES DE UNO A MUCHOS
    // AQUI SE DEBE COLOCAR EL DE UNO
    // Y EN CIUDAD DE MUCHOS
    // 
public function ciudad(){
	return $this-> hasOne('App\Ciudad','id','ciudad_id');
//							tabla A   ,llave de id de tabla A, campo con la que se relaciona

	// aqui solo debo poner el id nada mas 
	// yno ciudad_id?si
	// ahora tego otro dilema como puedo llamar a un regente?
	// para que me aparescan los datos en esa tab
	// como es la relacion de optica y regente???
}
	public function regente(){
		return $this-> hasMany('App\Regente','optica_id','id');
//							tabla A   ,llave de id de tabla A, campo con la que se relaciona
//							ya esta asi sacas al regente!!!si o si con el foreach
//							
//parece que si, pero lo colocas en una variable y luego recien lo accedes
//$rege= $optica->regente;
//$rege[0]->nombre;
//de esta forma
//
//lo mismo tendgo que hacer si instalo un datatable?
//si
//ok dani me quitaste la duda ande varios dias intentandolo sin exito
//muchas gracias
//
//
// @foreach( $optica->regente as $item)
                                 //    <td>++{{ $item->nombre }}**</td>       
                                 // @endforeach
//
	}

}

