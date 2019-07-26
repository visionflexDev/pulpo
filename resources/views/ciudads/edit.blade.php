@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Edición de datos de ópticas</div>
                  
                    <div class="panel-body">
                        
                      
                        {!! Form::model($optica, [ 'route' => ['opticas.update', $optica->id], 'method' => 'PUT'] ) !!} @include('opticas.partials.form') {!! Form::close() !!}

                    </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 @endsection