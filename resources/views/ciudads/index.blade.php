@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Vista Opticas
                    @can('opticas.create')
                        <a href="{{route('opticas.create')}}" class="btn btn-sm btn-primary pull-right">
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
                                <th>estado</th>
                                <th colspan="3">&nbsp;</th>

                            </tr>

                        </thead>
                        <tbody>
                          @foreach($opticas as $optica)
                            <tr>
                                
                                <td>{{ $optica->nombreOptica }}</td>
                                <td>{{$optica->razonSocial}}</td>
                                <th>{{$optica->direccion}}</th>
                                <td>{{ $optica->status}}</td>

                                @can('opticas.show')
                                <td width="10px">
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