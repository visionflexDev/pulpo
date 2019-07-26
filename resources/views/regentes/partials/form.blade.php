<div class="form-group">
	

	@empty($opticas)
	<div class="row">
		<div class="col-md-4">	

		{{Form::label('razonSocial','Nombre Optica')}}
		</div>
		
		<div class="col-md-8">
		{{Form::select('optica_id', $optic,
		 null, ['placeholder' => 'Seleccione una opcion','class'=>'js-example-basic-single form-control'])}}</div>

	</div>
	@else
	
		<div class="row">
		
		<div class="col-md-4">{{Form::label('nombre','Nombre de la Optica')}}</div> <span>
		<div class="col-md-4">{{Form::label('nombreOpticas',$opticas->opticas)}}</div>
		<div class="col-md-4">{{Form::select('nombreOptica', $opticas->nombreOpticas,
		 null, ['placeholder' => 'Seleccione una opcion','class'=>'js-example-basic-single form-control'])}}</div></span>
		<div class="col-md-8"></div>

		
	</div>
	@endif

</div>	

<div class="form-group">
	
	<div class="row">
		<div class="col-md-4">{{Form::label('nombre','Nombres')}}</div>
		<div class="col-md-8">{{Form::text('nombre',null,['class'=>'form-control'])}}</div>
	</div>

</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('paterno','Apellido Paterno')}}</div>
	<div class="col-md-8">{{Form::text('paterno',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('materno','Apellido materno')}}</div>
	<div class="col-md-8">{{Form::text('materno',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('identificacion','Doc. identidad')}}</div>
	<div class="col-md-8">{{Form::text('identificacion',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('codSede','Codigo Sedes')}}</div>
	<div class="col-md-8">{{Form::text('codSede',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('matricula','Matricula Profesinal')}}</div>
	<div class="col-md-8">{{Form::text('matricula',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('titAcad','Fecha Titulo academico')}}</div>
	<div class="col-md-8">{{Form::date('titAcad',\carbon\carbon::now())}}MM/DD/YYYY</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('provNac','Fecha Provision Nacional')}}</div>
	<div class="col-md-8">{{Form::date('provNac',\carbon\carbon::now())}}MM/DD/YYYY</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('regSede','Fecha Registro en SEDES')}}</div>
	<div class="col-md-8">{{Form::date('regSede',\carbon\carbon::now())}} MM/DD/YYYY</div>  

	</div>
</div>



<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('Ciudad','Ciudad')}}</div>
	<div class="col-md-8">{{Form::select('ciudad_id', $ciudads,
	 null, ['placeholder' => 'Seleccione una opcion','class'=>'js-example-basic-single form-control'])}}</div>
	</div>
	

</div>
	
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('direccion','Direccion')}}</div>
	<div class="col-md-8">{{Form::text('direccion',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('telefono','Telefono')}}</div>
	<div class="col-md-8">{{Form::text('telefono',null,['class'=>'form-control'])}}</div>

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('Celular','Celular')}}</div>
	<div class="col-md-8">{{Form::text('Celular',null,['class'=>'form-control'])}}</div>

	</div>
</div>

<div class="form-group">
	<div class="row">
		
		<div class="col-md-4">{{Form::label('status','Status')}}</div>
		<div class="col-md-8">{{Form::select('ciudad', ['Habilitado', 'Suspendido','Tramite','Notificado'],
	 null, ['placeholder' => 'Seleccione una opcion','class'=>'form-control'])}}</div>
	</div>

</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('nivAcad','Nivel academico')}}</div>
	<div class="col-md-8">{{Form::select('nivAcad', ['Tecnico Medio', 'Tecnico Superior','Licenciatura','Especialista'],
		null, ['placeholder' => 'Seleccione una opcion','class'=>'form-control'])}}

	</div>
</div>
<div class="form-group">
	<div class="row">
		
	<div class="col-md-4">{{Form::label('titProf','Titulo Profesional')}}</div>
	<div class="col-md-8">{{Form::text('titProf',null,['class'=>'form-control'])}}</div>

	</div>
</div>


{{Form::hidden('estado', $value = 1)}}

<div class="form-group">
	
	
	{{Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])}}

</div>
</div>
