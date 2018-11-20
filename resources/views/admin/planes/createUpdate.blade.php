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
@if(isset($planes))
	{!! Form::model($planes, ['route' => ['planes.update', $planes->id_plan], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'planes.store']) !!}
@endif

@if(isset($planes))
 {!! Form::model($planes, ['route' => ['planes.update', $planes->id_plan], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'planes.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'planes.store']) !!}
 
 <div class="form-group">
 {!! Form::text('nombre_plan', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre del Plan']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('precio_plan', null, ['class' => 'form-control','placeholder'=>'Ingrese el Precio del Plan']) !!}
 </div>
 
 
 
 <div class="form-group">
 {!! Form::submit('Agregar Plan', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection