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
document.getElementById('plan_nutricional').style.display = 'block';
}
</script>

  <div class="panel-body"> 



@if(isset($plan_nutricional))
	{!! Form::model($plan_nutricional, ['route' => ['plan_nutricional.update', $plan_nutricional->id_plan_nut], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'plan_nutricional.store']) !!}
@endif

@if(isset($plan_nutricional))
 {!! Form::model($plan_nutricional, ['route' => ['plan_nutricional.update', $plan_nutricional->id_plan_nut], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'plan_nutricional.store']) !!}
@endif









 <div class="panel-body">
 {!! Form::open(['route' => 'plan_nutricional.store']) !!}



<div class="form-group">
 {!! Form::text('clientes_rut_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}


<input type="button" value="Buscar" onclick="buscar()">
 </div>
</div>
  <div id="plan_nutricional" style='display:none;'>
@if(isset($plan_nutricional))
  {!! Form::model($plan_nutricional, ['route' => ['plan_nutricional.update', $plan_nutricional->id_plan_nut], 'method' => 'patch']) !!}
@else
  {!! Form::open(['route' => 'plan_nutricional.store']) !!}
@endif

@if(isset($plan_nutricional))
 {!! Form::model($plan_nutricional, ['route' => ['plan_nutricional.update', $plan_nutricional->id_plan_nut], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'plan_nutricional.store']) !!}
@endif

 
 <div class="form-group">
 {!! Form::text('nombre_plan_nut', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre del Plan Nutricional']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::textarea('descripcion_plan_nut', null, ['class' => 'form-control','placeholder'=>'Ingrese Plan Nutricional']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('personal_rut_p', null, ["class" => 'form-control','placeholder'=>'Ingrese rut del Nutricionista']) !!}
 </div>

 
 <div class="form-group">
 {!! Form::submit('Agregar Plan Nutricional', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>

@endsection