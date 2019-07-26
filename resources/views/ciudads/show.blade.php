@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> ---Opticas---- </div>
                  
                    <div class="panel-body">
                        <p><strong>Optica :</strong> {{$optica->nombreOptica}}</p>
                        <p><strong>Razon SOcial :</strong> {{$optica->razonSocial}}</p>
                        <p><strong>Nit : </strong> {{$optica->nit}}</p>
                        <p><strong>Direccion :</strong> {{$optica->direccion}}</p>
                        <p><strong>Celular :</strong> {{$optica->celular}}</p>
                        <p><strong>Telefono :</strong> {{$optica->telefono}}</p>
                        <p><strong>Ciudad :</strong> {{$optica->ciudad}}</p>
                        <p><strong>Sucursal :</strong> {{$optica->sucursal}}</p>
                        <p><strong>Central :</strong> {{$optica->optPrincipal}}</p>
                        <p><strong>Observaciones : </strong> {{$optica->observacion}}</p>
                        <p><strong>Resolucion Nro :</strong> {{$optica->resolucion}}</p>
                        <p><strong>Fecha registro :</strong> {{$optica->ingresoSede}}</p>
                        <p><strong>Fecha Actualizacion :</strong> {{$optica->actSede}}</p>


                    </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 @endsection