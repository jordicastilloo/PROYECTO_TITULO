@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->

<!--
{!! Form::open (['route' => 'clientes.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}-->


   {!!Form::model(Request::all(), ['route' => 'clientes.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}




  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre-Apellido Paterno'])!!} 
    {!!Form::select('estado',config('options4.estados'),null,['class' => 'form-control'])!!}  
   
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
                <th>Estado</th>
              </tr>
              @foreach ($clientes as $Cliente)
                  <tr>
                    <td width="500">{{ $Cliente->rut_cl}}</td>
                    <td width="500">{{ $Cliente->nombre_cliente}}</td>
                    <td width="500">{{ $Cliente->ap_pat_cliente}}</td>
                    <td width="500">{{ $Cliente->ap_mat_cliente}}</td>
                    <!--<td width="500">{{ $Cliente->estado}}</td>-->

                     @if($Cliente->estado == 1) <td width="500">{{ "Activo" }}</td>
                     @elseif($Cliente->estado == 0) <td width="500">{{ "Inactivo" }}</td>
                     @endif
                    <!--<td width="500"><img src={{ $Cliente->fotografia_cliente}} height="200" width="200"></td>-->

                    
                    <!--AQUI LLAMADA AL MODAL-->
                   
                    <td><a href="#" data-target="#modal-{{$Cliente->rut_cl}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal">Ver Datos</button>
      </a></td>



                    <td width="60" align="center">
                      {!! Html::link(route('clientes.edit', $Cliente->rut_cl), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>



                  



<!--
      <script type="text/javascript">
function CambiarEstadoAInactivo() {



        }
}
</script>

                   <td><input type="submit" value="Dejar Inactivo" class="btn btn-danger btn-md"onclick="return CambiarEstadoAInactivo();"></td> -->



                   
                    <!--
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('clientes.destroy', $Cliente->rut_cl), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Esta seguro?')">Eliminar</button>
                      {!! Form::close() !!}
                    </td>-->
                  </tr>


                    @include('admin.clientes.botonmodal')


              @endforeach
          </table>
          
             
      


      @endif

        <!--{!! $clientes->render() !!}-->

        {!! $clientes->appends(Request::only(['name','estado']))->render()!!}
 </div>
 </div>
</div>
@endsection