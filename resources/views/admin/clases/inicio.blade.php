@extends('admin.layout')
 @section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->

  {!! Form::open (['route' => 'clases.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la clase'])!!}  
   <!-- {!!Form::select('estado',config('options.types'),null,['class' => 'form-control'])!!}-->  
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}



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
              @foreach ($clases as $clase)
                  <tr>
                    <td width="500">{{ $clase->nombre_clase }}</td>
                    <td width="500">{{ $clase->descripcion_clase }}</td>
                    <td width="500">{{ $clase->hora_inicio }}</td>
                    <td width="500">{{ $clase->hora_fin }}</td>



<!--
                     <td><a href="#" data-target="#modal-delete-{{$clase->id_clase}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-sm">Mostrar Datos</button>
      </a></td>-->
 
                
                    <td width="60" align="center">
                      {!! Html::link(route('clases.edit', $clase->id_clase), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>


                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('clases.destroy', $clase->id_clase), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Esta seguro?')">Eliminar</button>
                      {!! Form::close() !!}
                    </td>


                  </tr>


                                 @include('admin.clases.botonmodal')

              @endforeach
          </table>

      @endif

      {!! $clases->render() !!}


 </div>
 </div>
</div>


@endsection


