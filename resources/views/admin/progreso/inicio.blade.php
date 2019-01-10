@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  <div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">


 {!! Html::link(route('progreso.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!}
</div>

 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$progreso->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Rut Cliente</th>

              </tr>
              @foreach ($progreso as $progreso)
                  <tr>
                    <td width="500">{{ $progreso->rut_cl }}</td>
                   <!-- <td width="500">{{ $progreso->estatura }}</td>--
                    <td width="500">{{ $progreso->subescapular }}</td>
                    <td width="500">{{ $progreso->tricipital }}</td>-->
                    <td width="60" align="center">


                      <td><a href="#" data-target="#modal-progreso-{{$progreso->rut_cl}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal">Ver Datos</button>
      </a></td>
                    <td>
                      {!! Html::link(route('progreso.edit', $progreso->id_progreso), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('progreso.destroy', $progreso->id_progreso), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
                      {!! Form::close() !!}

         </td>
                  </tr>


                  @include('admin.progreso.botonmodal')



              @endforeach
          </table>
      @endif
 </div>
 </div>
</div>
@endsection