@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('ejercicios.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$ejercicios->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Nombre</th>
                <th>Fotografia</th>
                <th>Video</th>
                <th>Descripcion</th>
                <th>Clasificacion</th>
                <th>Tipo</th>

              </tr>
              @foreach ($ejercicios as $ejercicios)
                  <tr>
                    <td width="500">{{ $ejercicios->nombre }}</td>
                    <td width="500">{{ $ejercicios->fotografia }}</td>
                    <td width="500">{{ $ejercicios->video }}</td>
                    <td width="500">{{ $ejercicios->descripcion }}</td>
                     <td width="500">{{ $ejercicios->clasificacion }}</td>
                      <td width="500">{{ $ejercicios->tipo }}</td>
                    <td width="60" align="center">
                      {!! Html::link(route('ejercicios.edit', $ejercicios->id_ejercicio), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('ejercicios.destroy', $ejercicios->id_ejercicio), 'method' => 'DELETE')) !!}
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