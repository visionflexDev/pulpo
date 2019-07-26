@extends('layouts.app')

@section('content')
	<div class="container">
	 				<div class="alert">
		                  <span>
		                  	
		                    @can('opticas.create')
		                        <a href="{{route('opticas.create')}}" class="btn btn-sm btn-primary pull-left">
		                            Registrar Optica
		                        </a>
		                    @endcan
		                  </span>

		                  <span>  @can('opticas.create')
		                        <a href="{{route('propietarios.create')}}" class="btn btn-sm btn-primary pull-left">
		                            Registrar Propietario
		                        </a>
		                    @endcan</span> 

		            </div>
		            
		<div class="panel panel-default">
						
		<div class="panel-heading">
	                  
	                    <strong>Opticas Registradas</strong>
	                </div>
			<div class="panel-body">
				
			<table id="opti" class="table">
			 <thead>
		         <tr>
		         	<!-- <th>ID</th> -->
		       	 	 <th>Nombre</th>
		        	 <th>razon social</th>
		             <th>Direccion</th>
		             <th>Ciudad</th>
		             <th>Regente</th>
		             <th>Acciones</th>
		                              
		         </tr>
		     </thead>

		    	 <tbody>
				     	@foreach($opticas as $optica)
				     	<tr>
				     	<!-- <td> {{$optica->id}} </td> -->
				     		<td>{{ $optica->nombreOptica }}</td>
				     		<td>{{ $optica->razonSocial}}</td> 
				     		<td>{{ $optica->direccion}}</td>
			                <td>{{ $optica->ciudad->name}}</td>
			                <td>
			                 @foreach( $optica->regente as $item)
								<a href="{{ route('regentes.show', $item->id) }}">{{ $item->paterno }} , {{$item->nombre}}</a>
			                 @endforeach
							</td>
							 	
									<td>
									<div class="btn-group">
										
									 @can('opticas.show')
	                                <span>
	                                	
	                                    <a href="{{ route('opticas.show', $optica->id) }}" 
	                                    class="btn btn-sm btn-default">
	                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
	                                    </a>
	                                </span>
	                                
	                                @endcan
	                                @can('opticas.edit')
	                                <span>
	                                	
	                                    <a href="{{ route('opticas.edit', $optica->id) }}" 
	                                    class="btn btn-sm btn-default">
	                                        <span class=" glyphicon glyphicon-pencil " aria-hidden="true"></span>
	                                    </a>
	                                </span>
	                                
	                                @endcan
	                                @can('opticas.destroy')
	                                	
	                                    {!! Form::open(['route' => ['opticas.destroy', $optica->id], 
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
			</div>

		</div>
	</div>



@endsection

