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
@if(isset($ejercicios))
	{!! Form::model($ejercicios, ['route' => ['ejercicios.update', $ejercicios->id_ejercicio], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'ejercicios.store']) !!}
@endif

@if(isset($ejercicios))
 {!! Form::model($ejercicios, ['route' => ['ejercicios.update', $ejercicios->id_ejercicio], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'ejercicios.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'ejercicios.store']) !!}
 
 <div class="form-group">
 {!! Form::text('nombre', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre del Ejercicio']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('fotografia', null, ['class' => 'form-control','placeholder'=>'Ingrese foto']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('video', null, ["class" => 'form-control','placeholder'=>'Ingrese video']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('descripcion', null, ["class" => 'form-control','placeholder'=>'Ingrese descripcion']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('clasificacion', null, ["class" => 'form-control','placeholder'=>'Ingrese clasificacion']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('tipo', null, ["class" => 'form-control','placeholder'=>'Ingrese tipo']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::submit('Agregar Ejercicio', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection