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
 
 



<script type="text/javascript">

function buscar()
{

//document.getElementById('rut').style.display = 'none';
           document.getElementById('progreso').style.display = 'block'; 

}




</script>


  <div class="panel-body">   

@if(isset($progreso))
 {!! Form::model($progreso, ['route' => ['progreso.update', $progreso->rut_cl], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'progreso.store']) !!}
@endif
 


 <div class="panel-body" id="rut">
 {!! Form::open(['route' => 'progreso.store']) !!}
 
 <div class="form-group" id="rut_cliente">
 {!! Form::text('rut_cl', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}
 

 <input type="button" value="Buscar" onclick="buscar()">



</div>







  <div id="progreso" style='display:none;'>




@if(isset($progreso))
{!! Form::model($progreso, ['route' => ['progreso.update', $progreso->id_progreso], 'method' => 'patch']) !!}
@else
  {!! Form::open(['route' => 'progreso.store']) !!}
@endif

@if(isset($progreso))
 {!! Form::model($progreso, ['route' => ['progreso.update', $progreso->id_progreso], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'progreso.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'progreso.store']) !!}
 
 <div class="form-group">
 {!! Form::text('peso_corporal', null, ['class' => 'form-control','placeholder'=>'Ingrese Peso Corporal']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('estatura', null, ['class' => 'form-control','placeholder'=>'Ingrese Estatura']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('subescapular', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Subescapular']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('tricipital', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Tricipital']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('bicipital', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Bicipital']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('supra_iliaco', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Supra Iliaco']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('hombros', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Hombros']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('pecho', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Pecho']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('biceps_relajado', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Biceps relajado']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('biceps_contraido', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Biceps contraido']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('muneca', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Muneca']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('cintura', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Cintura']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('cadera', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Cadera']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('muslo', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Muslo']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('gemelo', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Gemelo']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
    </div>
</div>
</div>

        </div>
      </div>
      
    </div>
  </div>
@endsection