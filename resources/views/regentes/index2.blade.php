@extends('layouts.app')

@section('content')
	<div class="container">
	 				<div class="alert">
		                    @can('regentes.create')
		                        <a href="{{route('regentes.create')}}" class="btn btn-sm btn-primary pull-left">
		                            Registrar regente
		                        </a>
		                    @endcan
		            </div>
		<div class="panel panel-default">
						
		<div class="panel-heading">
	                  
	                    <strong>regentes Registradas</strong>
	                </div>
			<div class="panel-body">
				
			<table id="opti" class="table">
			 <thead>
		         <tr>
		       	 	 <th>nombre</th>
		        	 <th>paterno</th>
		             <th>Carnet</th>
		             <th>codigo Sedes</th>
		             <th>Ciudad</th>
		            
		                              
		         </tr>
		     </thead>

		    	 <tbody>
				     	@foreach($regentes as $regente)
				     	<tr>
				     		<td>{{ $regente->nombre }}</td>
				     		<td>{{ $regente->paterno}}</td> 
				     		<td>{{ $regente->identificacion}}</td>
				     		<td> {{$regente->codSedes}} </td>
			                <td>{{ $regente->residencia}</td>
			                
							 	
									
			                
			                                
				     	</tr>
				     	@endforeach

		     	</tbody>

			</table>	
			</div>

		</div>
	</div>



@endsection