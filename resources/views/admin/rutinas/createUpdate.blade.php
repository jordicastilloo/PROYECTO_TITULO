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

<script type="text/javascript">
function buscar()
{
//document.getElementById('rut').style.display = 'none';
document.getElementById('rutina').style.display = 'block';
}
</script>


 <div class="panel-body">
 {!! Form::open(['route' => 'rutinas.store']) !!}



<div class="form-group">
 {!! Form::text('rut_cl', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}


  <br>
<input type="button" value="Buscar" onclick="buscar()">
 </div>
</div>
  <div id="rutina" style='display:none;'>

@if(isset($rutinas))
	{!! Form::model($rutinas, ['route' => ['rutinas.update', $rutinas->id_rutina], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'rutinas.store']) !!}
@endif

@if(isset($rutinas))
 {!! Form::model($rutinas, ['route' => ['rutinas.update', $rutinas->id_rutina], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'rutinas.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'rutinas.store']) !!}
 
 <div class="form-group">
 {!! Form::text('nombre_rutina', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre de la Rutina']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('desc_rutina', null, ['class' => 'form-control','placeholder'=>'Ingrese Descripcion']) !!}
 </div>
  
 <div class="form-group">
 {!! Form::submit('Agregar Rutina', ["class" => "btn btn-success btn-block"]) !!}
 </div>

</div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>
@endsection