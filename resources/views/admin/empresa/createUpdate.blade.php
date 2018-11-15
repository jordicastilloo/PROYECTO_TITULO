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
@if(isset($empresa))
	{!! Form::model($empresa, ['route' => ['empresa.update', $empresa->id_emp], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'empresa.store']) !!}
@endif

@if(isset($empresa))
 {!! Form::model($empresa, ['route' => ['empresa.update', $empresa->id_emp], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'empresa.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'empresa.store']) !!}
 
 <div class="form-group">
 {!! Form::text('nombre_emp', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre de la Empresa']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('direccion_emp', null, ['class' => 'form-control','placeholder'=>'Ingrese Direccion de la Empresa']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('telefono_emp', null, ["class" => 'form-control','placeholder'=>'Ingrese telefono de la Empresa']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('email_emp', null, ["class" => 'form-control','placeholder'=>'Ingrese Email de la Empresa']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::submit('Agregar Empresa', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection