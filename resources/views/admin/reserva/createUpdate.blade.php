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
@if(isset($reserva))
	{!! Form::model($reserva, ['route' => ['reserva.update', $reserva->id_reserva], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'reserva.store']) !!}
@endif

@if(isset($reserva))
 {!! Form::model($reserva, ['route' => ['reserva.update', $reserva->id_reserva], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'reserva.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'reserva.store']) !!}
 
 <div class="form-group">
 {!! Form::text('hora_inicio', null, ['class' => 'form-control','placeholder'=>'Ingrese hora de Inicio']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('hora_fin', null, ['class' => 'form-control','placeholder'=>'Ingrese Hora de finalizacion']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('fecha', null, ["class" => 'form-control','placeholder'=>'Ingrese Fecha']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('clientes_rut_cliente', null, ["class" => 'form-control','placeholder'=>'Ingrese el Cliente']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('personal_rut_p', null, ["class" => 'form-control','placeholder'=>'Ingrese el Nutricionista']) !!}
 </div>
 
 
 <div class="form-group">
 {!! Form::submit('Agregar Reserva', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection