@extends('admin.layout')
 
@section('content')

   
   {!!Form::model(Request::all(), ['route' => 'implementos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}

  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del Implemento'])!!}  
   <!-- {!!Form::select('estado',config('options.types'),null,['class' => 'form-control'])!!}-->  
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}




<!-----     -->


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
                <!--<th>Estado</th>-->
                <th>Tipo</th>
                <!--<th>Stock</th>-->
                <th>Fecha de Ingreso</th>

                <th>Subcategoria</th>

                <th>Stock</th>

                <th>Estado</th>

                <th>Estado Implemento</th>
              </tr>


              
              @foreach ($implementos as $implemento)



                  <tr>
                    <td width="500">{{ $implemento->nombre }}</td>
                    <!--<td width="500">{{ $implemento->estado }}</td>-->
                    <td width="500">{{ $implemento->tipo_id_tip}}</td>
                    <!--<td width="500">{{ $implemento->stock }}</td>-->
                    <td width="500">{{ $implemento->fecha_ingreso  }}</td>

                    <td width="500">{{ $implemento->subcategoria  }}</td>

                    <td width="500">{{ $implemento->stock  }}</td>


                    @if($implemento->estado == ""){
                    {{ $implemento->estado = "Por Confimar" }}
                    }            
                    @endif

                    <td width="500">{{ $implemento->estado  }}</td>


          <td><a href="#" data-target="#edit-modal-{{$implemento->id_implemento}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-sm">Ingresar Estado</button>
      </a></td>
        


                   <!--
                    <td width="60" align="center">
                      {!! Html::link(route('implementos.edit', $implemento->id_implemento), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>-->

                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('implementos.destroy', $implemento->id_implemento), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Esta seguro?')">Eliminar</button>
                      {!! Form::close() !!}
                  </td>
                  </tr>


 @include('admin.implementos.botonmodal')
  

              @endforeach

          </table>


      @endif




              {!! $implementos->render() !!}


 </div>
 </div>
</div>





     




@endsection