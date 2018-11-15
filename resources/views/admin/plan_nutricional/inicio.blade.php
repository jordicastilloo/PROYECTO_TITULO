@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('plan_nutricional.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$plan_nutricional->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Rut Personal</th>
                <th>Rut Cliente</th>

              </tr>
              @foreach ($plan_nutricional as $plan_nutricional)
                  <tr>
                    <td width="500">{{ $plan_nutricional->nombre_plan_nut }}</td>
                    <td width="500">{{ $plan_nutricional->descripcion_plan_nut }}</td>
                    <td width="500">{{ $plan_nutricional->personal_rut_p }}</td>
                    <td width="500">{{ $plan_nutricional->clientes_rut_cliente }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('plan_nutricional.edit', $plan_nutricional->id_plan_nut), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('plan_nutricional.destroy', $plan_nutricional->id_plan_nut), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
      @endif
 </div>
 </div>
</div>
@endsection