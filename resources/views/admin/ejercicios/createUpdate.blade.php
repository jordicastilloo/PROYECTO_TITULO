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
 {!! Form::text('descripcion', null, ["class" => 'form-control','placeholder'=>'Ingrese descripcion']) !!}
 </div>

 <div class="form-group">
 <label for="">Numero de Series</label>
 <select name="series" id="inputSeries" class="form-control">
 <option value="">-- Seleccione Numero de Series --</option>
 <option value ="1">1</option>    
 <option value ="2">2</option>
 <option value ="3">3</option>
 <option value ="4">4</option>
 <option value ="5">5</option>
 <option value ="6">6</option>
 <option value ="7">7</option>
 <option value ="8">8</option>
 <option value ="9">9</option>
 <option value ="10">10</option>
 </select>
</div>
  

  <div class="form-group">
 {!! Form::text('repeticiones', null, ["class" => 'form-control','placeholder'=>'Ingrese intervalo de Repeticiones']) !!}
 </div>


 <div class="form-group">
 {!! Form::text('fotografia', null, ['class' => 'form-control','placeholder'=>'Ingrese foto']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('video', null, ["class" => 'form-control','placeholder'=>'Ingrese video']) !!}
 </div>


 <div class="form-group">
 <label for="">Seleccione Tipo</label>
 <select name="tipo" id="inputDia" class="form-control">
 <option value="">-- Seleccione Tipo de Ejercicio --</option>
 <option value ="Musculacion">Musculacion</option>    
 <option value ="Cardiovascular">Cardiovascular</option> 
 </select>
 </div>

 <div class="form-group">
 <label for="">Seleccione Día</label>
 <select name="clasificacion" id="inputDia" class="form-control">
 <option value="">-- Seleccione Clasificacion del Ejercicio --</option>
 <option value ="Pecho">Pecho</option>    
 <option value ="Piernas">Piernas</option>
 <option value ="Espalda">Espalda</option>
 <option value ="Hombros">Hombros</option>
 
 </select>
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