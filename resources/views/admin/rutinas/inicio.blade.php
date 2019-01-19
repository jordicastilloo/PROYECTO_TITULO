@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('rutinas.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$rutinas->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Descripcion</th>

              </tr>
              @foreach ($rutinas as $Rutina)
                  <tr>
                    <td width="500">{{ $Rutina->nombre_rutina }}</td>
                     <td width="500">{{ $Rutina->desc_rutina }}</td>
                    <td width="60" align="center">




                  <td>
                      {!! Html::link(route('rutinas.edit', $Rutina->id_rutina), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('rutinas.destroy', $Rutina->id_rutina), 'method' => 'DELETE')) !!}
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