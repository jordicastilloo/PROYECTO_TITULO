@extends('admin.layout')
 
@section('content')

 @if(count($errors)>0)
 <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all()as $messages)
        <li>{{$messages}}</li>
        @endforeach
    </ul>
</div>
 @endif

<div class="container">	
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 <div class="panel panel-default">
 <div class="panel-heading">Home</div>
 <div class="panel-body">

@if(isset($clientes))
 {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->rut_cl], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'clientes.store']) !!}
@endif
 

	{!!Form::open(['route' => 'clientes.store'])!!}
		<div class="form-group">
			{!!Form::label('rut','Rut: ')!!}
			{!!Form::text('rut',null, ['id'=>'rut','class'=>'form-control', 'placeholder'=>'Ingrese rut sin digito verificador ej: 12345678'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('nombre','Nombre: ')!!}
			{!!Form::text('nombre',null, ['id'=>'nombre','class'=>'form-control', 'placeholder'=>''])!!}
		</div>

		<div class="form-group">
			{!!Form::label('ap_pat','Apellido Paterno: ')!!}
			{!!Form::text('ap_pat',null, ['id'=>'ap_pat','class'=>'form-control', 'placeholder'=>''])!!}
		</div>

		<div class="form-group">
			{!!Form::label('ap_mat','Apellido Materno: ')!!}
			{!!Form::text('ap_mat',null, ['id'=>'ap_mat','class'=>'form-control', 'placeholder'=>''])!!}
		</div>

		<div class="form-group">
			{!!Form::label('telefono','Telefono: ')!!}
			{!!Form::text('telefono',null, ['id'=>'telefono','class'=>'form-control', 'placeholder'=>''])!!}
		</div>

		<div class="form-group">
			{!!Form::label('email','email: ')!!}
			{!!Form::text('email',null, ['id'=>'email','class'=>'form-control', 'placeholder'=>''])!!}			
		</div>

		<div class="form-group">
			{!!Form::label('contraseña','contraseña: ')!!}
			{!!Form::text('contraseña',null, ['id'=>'pass','class'=>'form-control', 'placeholder'=>''])!!}			
		</div>

		<div class="form-group">
			{!!Form::label('nacionalidad','Nacionalidad: ')!!}
			{!!Form::text('nacionalidad',null, ['id'=>'nacionalidad','class'=>'form-control', 'placeholder'=>''])!!}			
		</div>
<div class="form-group">
{!!Form::label('fecha','Fecha de Nacimieto: ')!!}
{!! Form::text('fecha', null, ['class'=>'form-control datepicker' , 'id'=>'fecha']),old('fecha')!!}
</div>
<script type="text/javascript" src="/dist/jquery-ui/external/jquery/jquery.js"></script>
<script type="text/javascript" src="/dist/jquery-ui/jquery-ui.min.js"></script> 
<script type="text/javascript">
var fecha = $("#fecha").val();

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
{!! Form::radio('sexo', 'Masculino', true) !!} 
Masculino

{!! Form::radio('sexo', 'Femenino', true) !!}
Femenino 
</div>		

		<div class="form-group">
			{!!Form::label('alergia','Alergia: ')!!}
			{!!Form::text('alergia',null, ['id'=>'alergia','class'=>'form-control', 'placeholder'=>''])!!}			
		</div>	

		<div class="form-group">
			{!!Form::label('patologia','Patologia: ')!!}
			{!!Form::text('patologia',null, ['id'=>'patologia','class'=>'form-control', 'placeholder'=>''])!!}			
		</div>					

 <div class="form-group" onclick="return confirm('Esta seguro?')">
 {!! Form::submit('Agregar Cliente', ["class" => "btn btn-success btn-block"]) !!}
 </div>

	{!!Form::close()!!}

</div></div></div></div></div>
@endsection