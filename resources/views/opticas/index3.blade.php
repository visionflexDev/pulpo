@extends('layouts.app')

@section('content')
	<div class="container">
	 				<div class="alert">
		                    @can('opticas.create')
		                        <a href="{{route('opticas.create')}}" class="btn btn-sm btn-primary pull-left">
		                            Registrar Optica
		                        </a>
		                    @endcan
		            </div>
		<div class="panel panel-default">
						
		<div class="panel-heading">
	                  
	                    <strong>Opticas Registradas</strong>
	                </div>
			<div class="panel-body">
				
			<table id="opti" class="table">
			 <thead>
		         <tr>
		       	 	 <th>Nombre</th>
		        	 <th>razon social</th>
		             <th>Direccion</th>
		             <th>Ciudad</th>
		             <th>Regente</th>
		             <th>Acciones</th>
		                              
		         </tr>
		     </thead>

		    	

			</table>	
			</div>

		</div>
	</div>



@endsection