@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('empresa.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$empresa->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>

              </tr>
              @foreach ($empresa as $empresa)
                  <tr>
                    <td width="500">{{ $empresa->nombre_emp }}</td>
                    <td width="500">{{ $empresa->direccion_emp }}</td>
                    <td width="500">{{ $empresa->telefono_emp }}</td>
                    <td width="500">{{ $empresa->email_emp }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('empresa.edit', $empresa->id_emp), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('empresa.destroy', $empresa->id_emp), 'method' => 'DELETE')) !!}
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