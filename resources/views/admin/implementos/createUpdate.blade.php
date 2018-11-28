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
@if(isset($implementos))
	{!! Form::model($implementos, ['route' => ['implementos.update', $implementos->id_implemento], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'implementos.store']) !!}
@endif

@if(isset($implementos))
 {!! Form::model($implementos, ['route' => ['implementos.update', $implementos->id_implemento], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'implementos.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'implementos.store']) !!}
 
 <div class="form-group">
 {!! Form::text('nombre', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre del Implemento']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('estado', null, ['class' => 'form-control','placeholder'=>'Ingrese el estado del Implemento']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('tipo', null, ["class" => 'form-control','placeholder'=>'Ingrese el Tipo de Implemento']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('stock', null, ["class" => 'form-control','placeholder'=>'Ingrese el stock de Implemento']) !!}
 </div>
 
 <div class="form-group" onclick="return confirm('Esta seguro?')">
 {!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection