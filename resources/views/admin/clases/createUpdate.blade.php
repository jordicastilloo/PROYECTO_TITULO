@extends('admin.layout')
 
@section('content')
<div class="container">

<!-- BOTON PARA IR A CREAR
<div class="row">
 <div class="col-md-3">
 {!! Html::link(route('implementos.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>-->

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
 @endif -->
@if(isset($clases))
	{!! Form::model($clases, ['route' => ['clases.update', $clases->id_clase], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'clases.store']) !!}
@endif

@if(isset($clases))
 {!! Form::model($clases, ['route' => ['clases.update', $clases->id_clase], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'clases.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'clases.store']) !!}
 
 <div class="form-group">
 {!! Form::text('nombre_clase', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre de la Clase']) !!}
 </div>

  <div class="form-group">
 {!! Form::textarea('descripcion_clase', null, ['class' => 'form-control','placeholder'=>'Ingrese Descripcion de la Clase']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('hora_inicio', null, ['class' => 'form-control','placeholder'=>'Ingrese hora de Inicio']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('hora_fin', null, ["class" => 'form-control','placeholder'=>'Ingrese hora de Finalizacion']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('empresa_id_emp', null, ["class" => 'form-control','placeholder'=>'Ingrese Empresa']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::submit('Agregar Clase', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection