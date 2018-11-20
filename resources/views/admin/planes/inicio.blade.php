@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


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
                <th>Precio</th>

              </tr>
              @foreach ($planes as $planes)
                  <tr>
                    <td width="500">{{ $planes->nombre_plan }}</td>
                    <td width="500">{{ $planes->precio_plan }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('planes.edit', $planes->id_plan), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('planes.destroy', $planes->id_plan), 'method' => 'DELETE')) !!}
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