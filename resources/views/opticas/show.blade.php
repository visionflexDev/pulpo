@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="    ">
                  <div>
                    <a href="{{route('opticas.index')}} ">Volver a Opticas</a>
                  </div>
                  
                    <div class="">


                                    <div class=" panel panel-default">
                                      <div class="panel-heading">
                                       <h2>óptica : <strong>{{$optica->nombreOptica}}</strong> </h2>

                                         </div>

                                    <div id="exTab2" class="panel-body">
                                      <ul class="nav nav-tabs" role="tablist">
                                        <li class="active">
                                          <a href="#1" data-toggle="tab">Detalle Optica</a>
                                        </li>
                                        <li><a href="#2" data-toggle="tab">Detalle Regentes</a>
                                        </li>
                                        
                                      </ul>

                                      <div class="tab-content ">
                                        <div class="tab-pane active" id="1">
                                           <br>

                                            <!-- <div class="row">
                                             
                                                <div class="col-xs-6 col-md-4"><strong>Optica :</strong></div>
                                                <div class="col-xs-12 col-md-8">{{$optica->nombreOptica}}</div>

                                            </div> -->

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"> <strong>Razon Social :</strong> </div>
                                                <div class="col-xs-12 col-md-8"> {{$optica->razonSocial}}</div>

                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Nit : </strong> </div>
                                                <div class="col-xs-12 col-md-8"> {{$optica->nit}}</div>

                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"> <strong>Direccion :</strong></div>
                                                <div class="col-xs-12 col-md-8">{{$optica->direccion}} </div>

                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"> <strong>Celular :</strong></div>
                                                <div class="col-xs-12 col-md-8">{{$optica->celular}} </div>

                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Telefono :</strong> </div>
                                                <div class="col-xs-12 col-md-8">{{$optica->Telefono}} </div>

                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Ciudad :</strong> </div>
                                                <div class="col-xs-12 col-md-8"> {{$optica->ciudad->name}}</div>

                                            </div>

                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"> <strong>Sucursal :</strong></div>
                                                <div class="col-xs-12 col-md-8">{{$optica->sucursal}} </div>

                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Central :</strong> </div>
                                                <div class="col-xs-12 col-md-8">{{$optica->optPrincipal}} </div>

                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Resolucion Nro :</strong> </div>
                                                <div class="col-xs-12 col-md-8">  {{$optica->resolucion}}</div>

                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"> <strong>Fecha registro :</strong> </div>
                                                <div class="col-xs-12 col-md-8">{{$optica->ingresoSede}} </div>

                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Fecha Actualizacion :</strong> </div>
                                                <div class="col-xs-12 col-md-8"> {{$optica->actSede}} </div>

                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-xs-6 col-md-4"><strong>Observaciones : </strong> </div>
                                                <div class="col-xs-12 col-md-8">{{$optica->observacion}} </div>

                                            </div>


                                                    
                                                  
                                        </div>
                                        <div class="tab-pane" id="2">
                                                <br>

                                                  <!-- <div class="row">
                                                
                                                    <div class="col-xs-6 col-md-4"><strong>Optica :</strong></div>
                                                    <div class="col-xs-12 col-md-8">{{$optica->nombreOptica}}</div>
                                                   
                                                    

                                                  </div> -->

                                                <div class="row">
                                                
                                                    <div class="col-xs-6 col-md-4"><strong>Nombre : </strong> </div>
                                                    <div class="col-xs-12 col-md-8">{{$regente->paterno}} {{$regente->materno}}, {{$regente->nombre}} </div>

                                                 </div>
                                                 <div class="row">
                                                      <div class="col-xs-6 col-md-4"><strong>Carnet</strong></div>
                                                    <div class="col-xs-12 col-md-8">{{$regente->identificacion}}</div>

                                                 </div>
                                                 <div class="row">
                                                      <div class="col-xs-6 col-md-4"><strong>Codigo Sedes</strong></div>
                                                    <div class="col-xs-12 col-md-8">{{$regente->codSede}}</div>

                                                 </div>
                                                 <div class="row">
                                                      <div class="col-xs-6 col-md-4"><strong>Matricula</strong></div>
                                                    <div class="col-xs-12 col-md-8">{{$regente->matricula}}</div>

                                                 </div>
                                                 <div class="row">
                                                      <div class="col-xs-6 col-md-4"><strong>Domicilio</strong></div>
                                                    <div class="col-xs-12 col-md-8">{{$regente->direccon}}</div>

                                                 </div>
                                                 <div class="row">
                                                      <div class="col-xs-6 col-md-4"><strong>Ciudad</strong></div>
                                                    <div class="col-xs-12 col-md-8">{{$regente->ciudad_id}}</div>

                                                 </div>
                                                 

                                        </div>
                                        
                                      </div>
                                    </div>      

                    </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 @endsection