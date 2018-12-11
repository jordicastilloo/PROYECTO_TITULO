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
 <label for="">Tipo de Implemento</label>
 <select name="tipo_id_tip" id="inputTipo_id" class="form-control" required="required">
 <option value="">-- Seleccione el Tipo de Implemento --</option>
 @foreach(App\Tipos::get() as $tipo)
 <option value ="{{ $tipo['id_tipo'] }}">{{$tipo['nombre_tipo']}}</option>
 @endforeach
 </select>
 </div>


 <div class="form-group">
 <label for="">Subcategoria Implementos</label>
 <select name="subcategoria" id="inputSubcategoria" class="form-control" required="required">
 <option value="">-- Seleccione Subcategoria Tipo de Implemento --</option>
 <optgroup label="Kilogramos"> 
 <option value ="3 kg">3 kg</option>
 <option value ="6 kg">6 kg</option>
 <option value ="7,5 kg">7,5 kg</option>
 <option value ="10 kg">10 kg</option>
 <option value ="12,5 kg">12,5 kg</option>
 <option value ="15 kg">15 kg</option>
 <option value ="17,5 kg">17,5 kg</option>
 <option value ="20 kg">20 kg</option>
 <option value ="22,5 kg">22,5 kg</option>
 <option value ="25 kg">25 kg</option>
 <option value ="27,5 kg">27,5 kg</option>
 <option value ="30 kg">30 kg</option>
 <option value ="32,5 kg">32,5 kg</option>
 <option value ="35 kg">35 kg</option>
 <option value ="37,5 kg">37,5 kg</option>
 <option value ="40 kg">40 kg</option>

 <optgroup label="Metros"> 
 <option value="1 metro">1 metro</option>
 <option value="2 metros">2 metros</option>
 <option value="3 metros">3 metros</option>
 <option value="4 metros">4 metros</option>
 <option value="5 metros">5 metros</option>
 <option value="6 metros">6 metros</option>
 <option value="7 metros">7 metros</option>
 <option value="8 metros">8 metros</option>

  
 </select>
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