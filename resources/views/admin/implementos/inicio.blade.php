@extends('admin.layout')
 
@section('content')
<div class="container">
<div class="row">
 <div class="col-md-3">
 {!! Html::link(route('implementos.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$implementos->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
              @foreach ($implementos as $implementos)
                  <tr>
                    <td width="500">{{ $implementos->nombre }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('implementos.edit', $implementos->idimplemento), 'Edit', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('implementos.destroy', $implementos->idimplemento), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Delete</button>
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