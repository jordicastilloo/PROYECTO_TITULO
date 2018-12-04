@extends('admin.layout')
 
@section('content')

<div id="panel">
	    <div class="info-box-content">
            <span class="info-box-text">CPU Traffic</span>
            <span class="info-box-number">90<small>%</small></span>
        </div>
<div id="panel1" class="panel panel-primary">
	<div class="panel-heading">Planes</div>
	<div class="panel-body">
		<button type="button" class="btn btn-default">Plan 1</button>
		<button type="button" class="btn btn-default">Plan 2</button>
		<button type="button" class="btn btn-default">Plan 3</button>
	</div>
</div>
<div id="panel2" class="panel panel-primary">
	<div class="panel-heading">Cliente</div>
	<div class="panel-body">	 

@if(isset($clientes))
 {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->rut_cliente], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'clientes.store']) !!}
@endif
 


 <div class="panel-body">
 {!! Form::open(['route' => 'clientes.store']) !!}
 
 <div class="form-group">
 {!! Form::text('rut_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('nombre_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('ap_pat_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Apellido Paterno'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('ap_mat_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Apellido Materno'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('telefono_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Telefono de Contacto'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('email_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Email'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('contrasena_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Contraseña'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('nacionalidad_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Nacionalidad'])
 !!}
 </div>

<div class="form-group">
 {!! Form::text('fecha_nac_cliente', null,
 ['class'=>'form-control datepicker' , 'id'=>'fechanacimiento']),old('fecha_nac_cliente')!!}
 </div>




 
<script type="text/javascript" src="/dist/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="/dist/jquery-ui/jquery-ui.min.js"></script> 


 
<script type="text/javascript">

var fecha = $("#fecha_nac_cliente").val();

    $('.datepicker').datepicker({
    dateFormat: "yy-mm-dd",
    language: "es",
    autoclose: true,
    changeMonth: true, 
    changeYear: true,  
    yearRange: '-100:+0'
}).datepicker('setDate', new Date(fecha));

   

    
</script>


<div class="form-group">
<label for="Sexo">Selecciona genero:</label>
<br>
{!! Form::radio('sexo_cliente', 'Masculino', true) !!} 
Masculino

{!! Form::radio('sexo_cliente', 'Femenino', true) !!}
Femenino 
</div>

 <div class="form-group">
<label for="Foto">Subir Fotografia:</label>
<input type="file" class="form-control" name="file" >
</div>

 
 <div class="form-group">
 {!! Form::submit('Registrar Cliente', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>

</div>
<div id="panel3" class="panel panel-primary">
	<div class="panel-heading">Título del panel</div>
	<div class="panel-body">
		confirmar
	</div>
</div>
</div>
@endsection