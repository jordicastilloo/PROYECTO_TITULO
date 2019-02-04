@extends('admin.layout')
 
@section('content')


<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


  {!! Form::open (['route' => 'progreso.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre-Apellido Paterno'])!!}    
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}


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
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
              </tr>
              @foreach ($progreso as $Progreso)
                  <tr>
                    <td width="500">{{ $Progreso->rut_cl }}</td>
                    <td width="500">{{ $Progreso->clientes->nombre_cliente }}</td>
                    <td width="500">{{ $Progreso->clientes->ap_pat_cliente }}</td>
                    <td width="500">{{ $Progreso->clientes->ap_mat_cliente }}</td>
                    <td width="60" align="center">


                      <td><a href="#" data-target="#modal-progreso-{{$Progreso->rut_cl}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal">Ver Datos</button>
      </a></td>

                    <td width="60" align="center">
                      {!! Html::link(route('progreso.edit', $Progreso->id_progreso), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('progreso.destroy', $Progreso->id_progreso), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
                      {!! Form::close() !!}
                    </td>


                  </tr>


                  @include('admin.progreso.botonmodal')



              @endforeach
          </table>
      @endif

      {!!$progreso->render()!!}


</div>
</div>  



@endsection