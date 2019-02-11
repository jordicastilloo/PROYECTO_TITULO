@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->


{!!Form::model(Request::all(), ['route' => 'contiene.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}




<!--
{!! Form::open (['route' => 'contiene.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left' , 'role' => 'search'])!!}-->
  <div class="form-group">
    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre Rutina'])!!}    
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
  {!! Form::close()!!}





<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 




 {!! Html::link(route('contiene.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!} 


</div>


 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$contiene->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Rut Cliente</th>
                <th>Ejercicios</th>
                <th>Nombre Rutina</th>
                <th>Descripcion Rutina</th>


              </tr>
              @foreach ($contiene as $Contiene)
                  <tr>
                    <td width="500">{{ $Contiene->rut_cl}}</td>
                    
                    <td width="500">{{ $Contiene->nombre}}</td>

                    <td width="500">{{ $Contiene->nombre_rutina}}</td>


                    <td width="500">{{ $Contiene->desc_rutina}}</td>


                   <!-- <td width="60" align="center"><a href="#" data-target="#modal-{{$Contiene->id_cont}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal">Rutina de Ejercicios</button>
      </a></td>-->




                  </tr>



                 

              @endforeach
          </table>




          @foreach ($consultaejercicios as $consultaejer)


                    <td width="60" align="center"><a href="#" data-target="#modal-{{$consultaejer->id_cont}}" data-toggle="modal" title="Mostrar">
        <button type="button" class="btn btn-primary btn-md" data-toggle="modal">Rutina de Ejercicios</button>
      </a></td>

          @include('admin.contiene.botonmodal')

          @endforeach




          
             
    
      @endif

        {!! $contiene->render() !!}

            <!--    {!! $contiene->appends(Request::only(['name']))->render()!!}-->

 </div>
 </div>
</div>
@endsection