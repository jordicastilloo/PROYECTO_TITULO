@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->

{!! Form::open (['route' => 'clientes.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}
  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre-Apellido Paterno'])!!}    
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}





<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 





 {!! Html::link(route('clientes.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!} 


</div>


 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$clientes->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
              </tr>
              @foreach ($clientes as $Cliente)
                  <tr>
                    <td width="500">{{ $Cliente->rut_cliente}}</td>
                    <td width="500">{{ $Cliente->nombre_cliente}}</td>
                    <td width="500">{{ $Cliente->ap_pat_cliente}}</td>
                    <td width="500">{{ $Cliente->ap_mat_cliente}}</td>
                    <td><a href="#" data-target="#modal-delete-{{$Cliente->rut_cliente}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-sm">Ver Datos</button>
      </a></td>

                    
                    <td width="60" align="center">
                      {!! Html::link(route('clientes.edit', $Cliente->rut_cliente), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('clientes.destroy', $Cliente->rut_cliente), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Esta seguro?')">Eliminar</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>


                    @include('admin.clientes.botonmodal')


              @endforeach
          </table>
          
             
      


      @endif

        {!! $clientes->render() !!}
 </div>
 </div>
</div>
@endsection