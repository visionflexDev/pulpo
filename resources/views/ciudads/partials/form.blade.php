<div class="form-group">
	<div class="row">
		<div class="col-md-4">			
		{{Form::label('nombreOptica','Nombre Optica')}}
		</div>
		<div class="col-md-8">	
		{{Form::text('nombreOptica',null,['class'=>'form-control'])}}</div>
	</div>

</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('razonSocial','Razon social')}}</div>
	<div class="col-md-8">{{Form::text('razonSocial',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('nit','Número de nit')}}</div>
	<div class="col-md-8">{{Form::text('nit',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('direccion','Direccion Optica')}}</div>
	<div class="col-md-8">{{Form::text('direccion',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('celular','Celular')}}</div>
	<div class="col-md-8">{{Form::text('celular',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('telefono','telefono')}}</div>
	<div class="col-md-8">{{Form::text('Telefono',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('ciudad','Ciudad')}}</div>
	<div class="col-md-8">{{Form::select('ciudad', ['prueba','Cochabamba', 'Santa Cruz','La Paz','Potosi','Oruro','Tarija','Sucre','Beni','Pando','El Alto'],
	 null, ['placeholder' => 'Seleccione una Ciudad','class'=>'form-control'])}}</div>
	</div>
	

</div>
	
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('sucursal','Nro Sucursal')}}</div>
	<div class="col-md-8">{{Form::text('sucursal',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('optPrincipal','Central')}}</div>
	<div class="col-md-8">{{Form::text('optPrincipal',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('Observacion','Observaciones')}}</div>
	<div class="col-md-8">{{Form::text('observacion',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
		<div class="col-md-4">{{Form::label('status','Status')}}</div>
		<div class="col-md-8">{{Form::select('status', ['Autorizado', 'No autorizado','clausurado','notificado'],
	 null, ['placeholder' => 'Seleccione una opcion','class'=>'form-control'])}}</div>
	</div>

	</div>

<div class="form-group">
	<div class="row">
		
		<div class="col-md-4">{{Form::label('resolucion','Resolucion')}}</div>
		<div class="col-md-8">{{Form::text('resolucion',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
		<div class="col-md-4">{{Form::label('ingresoSede','Registro Sedes')}}</div>

		<div class="col-md-8">{{Form::date('ingresoSede',\carbon\carbon::now())}}</div>
	</div>

</div>
<div class="form-group">
	<div class="row">
		
		<div class="col-md-4">{{Form::label('actSede','Fecha Actualizacion')}}</div>
		
		<div class="col-md-8">{{Form::date('actSede', \Carbon\Carbon::now())}}</div>
	</div>

</div>
<div class="form-group">
	
	
	{{Form::submit('guardar', ['class'=>'btn btn-sm btn-primary'])}}

</div>
</div>