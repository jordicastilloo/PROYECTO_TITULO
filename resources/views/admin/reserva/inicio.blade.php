@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('reserva.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$reserva->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Hora de Inicio</th>
                <th>Hora finalizacion</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Nutricionista</th>

              </tr>
              @foreach ($reserva as $reserva)
                  <tr>
                    <td width="500">{{ $reserva->hora_inicio }}</td>
                    <td width="500">{{ $reserva->hora_fin }}</td>
                    <td width="500">{{ $reserva->fecha }}</td>
                    <td width="500">{{ $reserva->clientes_rut_cliente }}</td>
                    <td width="500">{{ $reserva->personal_rut_p }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('reserva.edit', $reserva->id_reserva), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('reserva.destroy', $reserva->id_reserva), 'method' => 'DELETE')) !!}
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