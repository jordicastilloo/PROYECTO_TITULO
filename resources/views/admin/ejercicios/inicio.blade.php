@extends('admin.layout')
 
@section('content')


{!!Form::model(Request::all(), ['route' => 'ejercicios.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}


  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Ejercicio'])!!}    


    <!--Formulario lista de tipos-->
   {!!Form::select('clasificacion',config('options3.clasificaciones'),null,['class' => 'form-control'])!!}
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}




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
                <th>Clasificacion</th>
                <th>Tipo</th>

              </tr>
              @foreach ($ejercicios as $Ejercicio)
                  <tr>
                    <td width="500">{{ $Ejercicio->nombre }}</td>
                     <td width="500">{{ $Ejercicio->clasificacion }}</td>
                      <td width="500">{{ $Ejercicio->tipo }}</td>
                      
                    <td width="60" align="center">

                     <td><a href="#" data-target="#modal-{{$Ejercicio->id_ejercicio}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-sm">Ver Descripcion</button>
      </a></td>
 
                    <td width="60" align="center">
                      {!! Html::link(route('ejercicios.edit', $Ejercicio->rut_p), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('ejercicios.destroy', $Ejercicio->id_ejercicio), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md" onclick="return confirm('Esta seguro?')">Eliminar</button>
                      {!! Form::close() !!}
                    </td>


                  </tr>

                                   @include('admin.ejercicios.botonmodal')



              @endforeach

          </table>
    
      @endif

         <!--PARA VER COMPLETA LA LISTA DE ACUERDO AL TIPO-->
         {!! $ejercicios->appends(Request::only(['name','clasificacion']))->render()!!}
 </div>
 </div>
</div>
</div>
@endsection