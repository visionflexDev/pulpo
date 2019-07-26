@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert">
         @can('regentes.createSolo')
                        <a href="{{route('regentes.createSolo')}}" class="btn btn-sm btn-primary pull-left">
                            Crear
                        </a>
                    @endcan
    </div>
    <div class="panel panel-default">
                        
        <div class="panel-heading">
                      
                        <strong>Profesionales Registrados</strong>
                    </div>
            <div class="panel-body">
                   <table id="opti" class="table table-striped table-hover">
                        <thead>
                            <tr>
                               
                                <th>Nombre</th>
                                <th>paterno</th>
                                <th>Cedula</th>
                                <th>Codigo Sedes</th>
                               
                                <th>acciones</th>
                              

                            </tr>

                        </thead>
                        <tbody>
                          @foreach($regentes as $regente)
                            <tr>
                               
                                <td>{{ $regente->nombre }}</td>
                                <td>{{ $regente->paterno }}</td>
                                <td>{{ $regente->identificacion}}</td>
                                <td>{{ $regente->codSede}}</td>
                                

                                 <td>
                                        <div class="btn-group">
                                            
                                         @can('regentes.show')
                                        <span>
                                            
                                            <a href="{{ route('regentes.show', $regente->id) }}" 
                                            class="btn btn-sm btn-default">
                                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                            </a>
                                        </span>
                                        
                                        @endcan
                                        @can('regentes.edit')
                                        <span>
                                            
                                            <a href="{{ route('regentes.edit', $regente->id) }}" 
                                            class="btn btn-sm btn-default">
                                                <span class=" glyphicon glyphicon-pencil " aria-hidden="true"></span>
                                            </a>
                                        </span>
                                        
                                        @endcan
                                        @can('regentes.destroy')
                                            
                                            {!! Form::open(['route' => ['regentes.destroy', $regente->id], 
                                            'method' => 'DELETE']) !!}
                                        <span>
                                             <button class="btn btn-sm btn-danger">
                                                     <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                </button>
                                        </span>
                                            {!! Form::close() !!}
                                        @endcan
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       
                   </table>
                        {{ $regentes->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

