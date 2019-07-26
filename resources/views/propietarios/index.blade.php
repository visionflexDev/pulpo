@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Vista propietarios
                    @can('propietarios.create')
                        <a href="{{route('propietarios.create')}}" class="btn btn-sm btn-primary pull-right">
                            Crear
                        </a>
                    @endcan
                </div>

                <div class="panel-body">
                   <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <!-- <th width="10px">ID</th> -->
                                <th>Nombre</th>
                                <th>razon social</th>
                                <th>Direccion</th>
                                <th>Ciudad</th>
                                <th>estado</th>
                               

                            </tr>

                        </thead>
                        <tbody>

                          @foreach($propietarios as $propietario)
                          
                            <tr>
                                
                                <td>{{ $propietario->nombrepropietario }}</td>
                                <td>{{ $propietario->razonSocial}}</td>
                                <td>{{ $propietario->direccion}}</td>
                                <td>{{ $propietario->ciudad_id}}</td>
                                <td>{{ $propietario->status}}</td>
                              

                                @can('propietarios.show')
                                <td width="10px">
                                    <a href="{{ route('propietarios.show', $propietario->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('propietarios.edit')
                                <td width="10px">
                                    <a href="{{ route('propietarios.edit', $propietario->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('propietarios.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['propietarios.destroy', $propietario->id], 
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
                        {{ $propietarios->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection