@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->

<!--
{!! Form::open (['route' => 'personal.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}-->

{!!Form::model(Request::all(), ['route' => 'personal.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}


  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre-Apellido Paterno'])!!}    


    <!--Formulario lista de tipos-->
     {!!Form::select('tipo_p',config('options.types'),null,['class' => 'form-control'])!!}
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}




<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 





 {!! Html::link(route('personal.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!} 


</div>


 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$personal->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Tipo</th>
                <th>Fotografia</th>

              </tr>
              @foreach ($personal as $Persona)
                  <tr>
                    <td width="500">{{ $Persona->rut_p}}</td>
                    <td width="500">{{ $Persona->nombre_p}}</td>
                    <td width="500">{{ $Persona->ap_pat_p}}</td>
                    <td width="500">{{ $Persona->ap_mat_p}}</td>
                    <td width="500">{{ $Persona->tipo_p}}</td>
                    <td width="500">{{ $Persona->fotografia_p}}</td>

                    
                    <td width="60" align="center">
                      {!! Html::link(route('personal.edit', $Persona->rut_p), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('personal.destroy', $Persona->rut_p), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
    
      @endif

         <!--{!! $personal->render() !!}-->
         <!--PARA VER COMPLETA LA LISTA DE ACUERDO AL TIPO-->
         {!! $personal->appends(Request::only(['name','tipo_p']))->render()!!}
 </div>
 </div>
</div>
@endsection