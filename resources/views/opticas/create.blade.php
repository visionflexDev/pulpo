@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Datos de Opticas </div>
                  
                    <div class="panel-body">
                        
                        {{ Form::open(['route' => 'opticas.store']) }}

                            @include('opticas.partials.form')
                            
                        {{ Form::close() }}


                    </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 @endsection