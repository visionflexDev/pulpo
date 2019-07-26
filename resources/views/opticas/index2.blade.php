@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel-heading">
                    Vista Opticas
                    @can('opticas.create')
                        <a href="{{route('opticas.create')}}" class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                    @endcan
                </div>

            <div class="">
                <div class="">
                  <table class="table table-bordered" id="opti" >
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>razon social</th>
                                <th>Direccion</th>
                                <th>Ciudad</th>
                                <th>Regente</th>
                                <th>acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                          @foreach($opticas as $optica)
                          
                            <tr>
                                
                                <td>{{ $optica->nombreOptica }}</td>
                                <td>{{ $optica->razonSocial}}</td>
                                <td>{{ $optica->direccion}}</td>
                                <td>{{ $optica->ciudad->name}}</td>
                                 
                                 @foreach( $optica->regente as $item)

                                    <td><a href="{{ route('regentes.show', $item->id) }}">{{ $item->nombre  }} <br> {{$item->paterno}}</a></td>

                                 @endforeach
                                
                                
                                
                
                                @can('opticas.show')
                                <td>
                                    <a href="{{ route('opticas.show', $optica->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('opticas.edit')
                                <td width="10px">
                                    <a href="{{ route('opticas.edit', $optica->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('opticas.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['opticas.destroy', $optica->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                        
                   </table>
                        {{ $opticas->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 


    
    
   
