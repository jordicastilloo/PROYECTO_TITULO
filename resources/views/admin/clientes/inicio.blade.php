@extends('admin.layout')
 
@section('content')


<style type="text/css">

#boton1 {
    padding:5px 15px; 
    background:#B50E0E; 
    border:0 none;
    color:white;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
</style>

<style type="text/css">

#boton2 {
    padding:5px 15px; 
    background:#CDCF2A; 
    border:0 none;
    color:white;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
</style>



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
 <div class="col-md-10 col-md-offset-1" align="right">


 {!! Html::link(route('clientes.create'), 'Crear', array('class' => 'btn btn-info btn-md')) !!} 
 <button id="btnPrint" class="btn btn-warning btn-md">Exportar <i class="fas fa-print"></i></button>

</div>

<div id="dvCont" style="display:none;">
  
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

                     @if($Cliente->estado == 1) <td width="500">{{ "Activo" }}</td>
                     @elseif($Cliente->estado == 0) <td width="500">{{ "Inactivo" }}</td>
                     @endif
              @endforeach
                   </tr>
                 </table>
            @endif

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



                    @if($Cliente->estado == 1) 
                      <td>
                      <form id="form1" name="form1" action="/inicio2" method="post">
                        <input type="hidden" name="_token" value = "<?php echo csrf_token(); ?>">

                      <input type="hidden" name="rut_cliente_dejar_activo" id="rut_cliente_dejar_activo" value="<?php echo $Cliente->rut_cl?>">
                   
                      <input type="submit" value="Dejar Inactivo" id="boton1"/>

                      
    
                      </form></td>

                      @elseif($Cliente->estado == 0)
                        <td>
                      <form id="form2" name="form2" action="/inicio" method="post">
                        <input type="hidden" name="_token" value = "<?php echo csrf_token(); ?>">

                      <input type="hidden" name="rut_cliente" id="rut_cliente" value="<?php echo $Cliente->rut_cl?>">
                   
                      <input type="submit" value="Dejar Activo" id="boton2" />
    
                      </form></td>


                      @endif







                  



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