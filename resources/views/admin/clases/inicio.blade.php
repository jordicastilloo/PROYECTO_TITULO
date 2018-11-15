@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


 <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('clases.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$clases->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Hora de Inicio</th>
                <th>Hora Finalizacion</th>
                <th>Empresa ID</th>

              </tr>
              @foreach ($clases as $clases)
                  <tr>
                    <td width="500">{{ $clases->nombre }}</td>
                    <td width="500">{{ $clases->hora_inicio }}</td>
                    <td width="500">{{ $clases->hora_fin }}</td>
                    <td width="500">{{ $clases->empresa_id_emp }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('clases.edit', $clases->id_clase), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('clases.destroy', $clases->id_clase), 'method' => 'DELETE')) !!}
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