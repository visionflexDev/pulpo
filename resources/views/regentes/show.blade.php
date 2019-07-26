@extends('layouts.app')

@section('content')

<div class="container">
    <div>
        <a href="{{route('opticas.index')}}">Volver a opticas</a><br>
        <a href="{{route('regentes.index')}} ">volver a regentes</a>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Vista de regentes </div>
                  
                    <div class="panel-body">
                        
                        <div class="row">
                            <div class="col-xs-9">
                                
                                <div class="col-xs-6 .col-sm-3"><strong>Nombres :</strong></div><div class="col-xs-6 .col-sm-3"><p> {{$regente->nombre}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>apellidos :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->paterno}} {{$regente->materno}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Nro Cedula :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->identificacion}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Codigo de sedes :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->codSede}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Matricula :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->matricula}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Fechas Tit. academico :</strong></div>
                                <div class="col-xs-6 .col-sm-3"> <p> {{$regente->titAcad}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Fechas Prov. Nacional :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->provNac}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Fecha Registro Sedes :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->regSede}}</p></div>
                          
                                <div class="col-xs-6 .col-sm-3"><strong>Direccion :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->direccion}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Telefono :</strong></div>
                                <div class="col-xs-6 .col-sm-3"><p> {{$regente->telefono}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Celular :</strong> </div>
                                <div class="col-xs-6 .col-sm-3"> <p>{{$regente->Celular}}</p></div>
                                <div class="col-xs-6 .col-sm-3"><strong>Estado :</strong></div>
                                <div class="col-xs-6 .col-sm-3"> <p> {{$regente->stat}}</p></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>
                                <div class="col-xs-6 .col-sm-3"></div>

                            </div>
                        
                        
                        
                        
                        
                        
                       
                        
                        
                        
                        
                        
                       
                       
                        
                        </div>

                    </div>
                 </div>
             </div>
         </div>

     </div>

 </div>

 @endsection