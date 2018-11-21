@extends('admin.layout')
 
@section('content')
<div class="container">

	
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
 ['class'=>'form-control', 'placeholder'=>'Ingrese Fecha de Nacimiento (aa/mm/dd)'])
 !!}
 </div>


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
 {!! Form::text('contrata_id_insc', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese id contrata'])
 !!}
 </div>

 
 <div class="form-group">
 {!! Form::submit('Registrar Cliente', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection