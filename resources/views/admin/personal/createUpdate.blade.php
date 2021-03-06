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
 
 
@if(isset($personal))
 {!! Form::model($personal, ['route' => ['personal.update', $personal->rut_p], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'personal.store']) !!}
@endif
 


 <div class="panel-body">
 {!! Form::open(['route' => 'personal.store']) !!}
 
 <div class="form-group">
 {!! Form::text('rut_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('nombre_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('ap_pat_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Apellido Paterno'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('ap_mat_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Apellido Materno'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('direccion_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Direccion'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('telefono_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Telefono de Contacto'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('email_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Email'])
 !!}
 </div>


 <div class="form-group">
<label for="Sexo">Seleccione Tipo de Usuario:</label>
<br>
{!! Form::radio('tipo_p', 'Administrador', true) !!} 
Administrador
{!! Form::radio('tipo_p', 'Profesor', true) !!} 
Profesor
{!! Form::radio('tipo_p', 'Nutricionista', true) !!} 
Nutricionista
</div>

 <div class="form-group">
 {!! Form::text('nacionalidad_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Nacionalidad'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('fecha_nac_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Fecha de Nacimiento (aa/mm/dd)'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('profesion_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Profesion'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('fotografia_p', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Fotografia'])
 !!}
 </div>


<div class="form-group">
<label for="Sexo">Selecciona genero:</label>
<br>
{!! Form::radio('sexo_p', 'Masculino', true) !!} 
Masculino

{!! Form::radio('sexo_p', 'Femenino', true) !!}
Femenino 
</div>

<div class="form-group">
<label for="Foto">Subir Foto:</label>
<input type="file" class="form-control" name="file" >
</div>
 
 
 <div class="form-group" onclick="return confirm('Esta seguro?')">
 {!! Form::submit('Registrar Personal', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection