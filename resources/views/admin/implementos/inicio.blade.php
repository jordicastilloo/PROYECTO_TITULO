@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('implementos.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$implementos->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Stock</th>

              </tr>
              @foreach ($implementos as $implementos)
                  <tr>
                    <td width="500">{{ $implementos->nombre }}</td>
                    <td width="500">{{ $implementos->estado }}</td>
                    <td width="500">{{ $implementos->tipo }}</td>
                    <td width="500">{{ $implementos->stock }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('implementos.edit', $implementos->id_implemento), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('implementos.destroy', $implementos->id_implemento), 'method' => 'DELETE')) !!}
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