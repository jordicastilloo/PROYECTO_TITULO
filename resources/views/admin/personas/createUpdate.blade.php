
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
 
 
@if(isset($personas))
 {!! Form::model($personas, ['route' => ['personas.update', $personas->RutPersona], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'personas.store']) !!}
@endif
 


 <div class="panel-body">
 {!! Form::open(['route' => 'personas.store']) !!}
 
 <div class="form-group">
 {!! Form::text('RutPersona', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('Nombre', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Nombre'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Apellido_Materno', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Apellido Materno'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Apellido_Paterno', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Apellido Paterno'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Telefono', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Telefono de Contacto'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Email', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Email'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Tipo', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Tipo de Usuario'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Huella', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Huella'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Nacionalidad', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Nacionalidad'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Fecha_nacimiento', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Fecha de Nacimiento (aa/mm/dd)'])
 !!}
 </div>

<div class="form-group">
<label for="Sexo">Selecciona genero:</label>
<br>Masculino
{!! Form::radio('Sexo', 'Masculino', true, ['class' => 'form-control']) !!} 
Femenino
{!! Form::radio('Sexo', 'Femenino', true, ['class' => 'form-control']) !!} 
</div>



<!--
 <div class="form-group">
 {!! Form::text('Sexo', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Sexo'])
 !!}
 </div>-->

 <div class="form-group">
 {!! Form::textarea('Alergico', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Tipo de Alergia'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::textarea('Patologia', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Patologia'])
 !!}
 </div>

 <div class="form-group">
 {!! Form::text('Fotografia', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Fotografia'])
 !!}
 </div>
 
 <div class="form-group">
 {!! Form::submit('Registrar Socio', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection