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





<!--diseño-->
<div class="col-md-8">
    <div class="box box-danger">
            <div class="box-header">


            	<!--AQUI TERMINA-->


	
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 <div class="panel panel-default">
 <div class="panel-heading">Home</div>
 
 <!--
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif
 
 @if (Session::has('message'))
     <div class="alert alert-success">{{ Session::get('message') }}</div>
 @endif   -->
 
 
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
 {!! Form::text('huella_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Huella'])
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

	
    //$("#date").datepicker();
    	//$('#fecha_nac_cliente').datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, language: "es", yearRange: '-100:+0'});
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

 

<!--Fecha de Nacimiento: <input type="text" id="date" >-->


 

<div class="form-group">
<label for="Sexo">Selecciona genero:</label>
<br>
{!! Form::radio('sexo_cliente', 'Masculino', true) !!} 
Masculino

{!! Form::radio('sexo_cliente', 'Femenino', true) !!}
Femenino 
</div>

 <div class="form-group">
 {!! Form::text('alergia_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese si contiene algun tipo de alergia'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('patologia_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese si contiene algun tipo de Patologia'])
 !!}
 </div>

 <div class="form-group">
<label for="Foto">Subir Fotografia:</label>
<input type="file" class="form-control" name="file" >
</div>

<div class="form-group">
 {!! Form::text('fotografia_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese id contrata'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('empresa_id_emp', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese id contrata'])
 !!}
 </div>

<div class="form-group">
 {!! Form::text('contrata_id_insc', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese id contrata'])
 !!}
 </div>

 
 <div class="form-group" onclick="return confirm('Esta seguro?')">
 {!! Form::submit('Registrar Cliente', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection