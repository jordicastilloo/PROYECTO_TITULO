@extends('admin.layout')
 
@section('content')



 @if(count($errors)>0)
 <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all()as $messages)
        <li>{{$messages}}</li>
        @endforeach
    </ul>
</div>
 @endif



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
 <label for="">Duracion Plan</label>
 <select name="duracion_plan" id="inputDuracionPlan" class="form-control">
 <option value="">-- Seleccione Duración del Plan --</option>


 <optgroup label="Diario"> 
 <option value="0">Dia</option>

 <optgroup label="Mensual"> 
 <option value ="1">1 mes</option>    
 <option value ="2">2 meses</option>
 <option value ="3">3 meses</option>
 <option value ="4">4 meses</option>
 <option value ="5">5 meses</option>
 <option value ="6">6 meses</option>
 <option value ="7">7 meses</option>
 <option value ="8">8 meses</option>
 <option value ="9">9 meses</option>
 <option value ="10">10 meses</option>
 <option value ="11">11 meses</option>
 <option value ="12">12 meses</option>
  
 </select>
 </div>




 <div class="form-group">
 <label for="">Dias Gratis</label>
 <select name="duracion_plan" id="inputDuracionPlan" class="form-control">
 <option value="">-- Seleccione Días Gratis --</option>

 <option value ="0">0 Días</option>    
 <option value ="1">1 Día</option>    
 <option value ="2">2 Días</option>
 <option value ="3">3 Días</option>
 <option value ="4">4 Días</option>
 <option value ="5">5 Días</option>
 <option value ="6">6 Días</option>
 <option value ="7">7 Días</option>
 <option value ="8">8 Días</option>
 <option value ="9">9 Días</option>
 <option value ="10">10 Días</option>

  
 </select>
 </div>
 
 
 <div class="form-group" onclick="return confirm('Esta seguro?')">
 {!! Form::submit('Agregar Plan', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection