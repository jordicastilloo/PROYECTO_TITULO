@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


{!! Form::open (['route' => 'planes.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Plan'])!!}    
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}




  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('planes.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$planes->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Precio Mensual</th>

              </tr>
              @foreach ($planes as $plan)
                  <tr>
                    <td width="500">{{ $plan->nombre_plan }}</td>
                    <td width="500">{{ $plan->precio_plan }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('planes.edit', $plan->id_plan), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('planes.destroy', $plan->id_plan), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Esta seguro?')">Eliminar</button>
                      {!! Form::close() !!}

         </td>
                  </tr>
              @endforeach
          </table>
      @endif


                    {!! $planes->render() !!}

 </div>
 </div>
</div>
@endsection