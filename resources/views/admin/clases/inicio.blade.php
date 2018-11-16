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
                <th>Descripcion</th>
                <th>Hora de Inicio</th>
                <th>Hora Finalizacion</th>

              </tr>
              @foreach ($clases as $clases)
                  <tr>
                    <td width="500">{{ $clases->nombre_clase }}</td>
                    <td width="500">{{ $clases->descripcion_clase }}</td>
                    <td width="500">{{ $clases->hora_inicio }}</td>
                    <td width="500">{{ $clases->hora_fin }}</td>


                    <!-- Button trigger modal -->
<td width="60" align="center">


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Listar Datos
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          {{ $clases->descripcion_clase }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</td>
                
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