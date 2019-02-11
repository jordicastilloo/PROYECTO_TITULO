@extends('admin.layout')
 
@section('content')


 @if(count($errors)>0)
 <div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all()as $messages)
        <li>{{$messages}}</li>
        @endforeach
    </ul>
</div>
 @endif



<div class="container">


 


 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 <div class="panel panel-default">
 <div class="panel-heading">Home</div>
 <!--
                @if($errors->has())
                    <div class='alert alert-danger'>
                        @foreach ($errors->all('<p>:message</p>') as $message)
                            {!! $message !!}
                        @endforeach
                    </div>
                @endif
 
 @if (Session::has('message'))
     <div class="alert alert-success">{{ Session::get('message') }}</div>
 @endif -->
@if(isset($contiene))
	{!! Form::model($contiene, ['route' => ['contiene.update', $contiene->id_cont], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'contiene.store']) !!}
@endif

@if(isset($contiene))
 {!! Form::model($contiene, ['route' => ['contiene.update', $contiene->id_cont], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'contiene.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'contiene.store']) !!}



 <div class="form-group">
{!!Form::label('Rutina','Rutina:')!!}
{!!Form::select('id_rutina',$rutinas,null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
 <label for="">Seleccione Día</label>
 <select name="dia" id="inputDia" class="form-control">
 <option value="">-- Seleccione Día --</option>
 <option value ="Lunes">Lunes</option>    
 <option value ="Martes">Martes</option>
 <option value ="Miercoles">Miercoles</option>
 <option value ="Jueves">Jueves</option>
 <option value ="Viernes">Viernes</option>
 <option value ="Sabado">Sabado</option>
 <option value ="Domingo">Domingo</option>
 </select>
 </div>



<h4><b>Seleccione ejercicios</b><br><br></h4>



<h5><b>Ejercicios Hombro:</b><br></h5>
  @foreach($ejercicios as $ejercicio)



  <input type="checkbox" class="form" name="id_ejercicio[]" id="id_ejercicio[]" value="{{ $ejercicio->id_ejercicio }}"> {{   $ejercicio->nombre}}<br>


  


  @endforeach


  <br>



  <h5><b>Ejercicios Pecho:</b><br></h5>
  @foreach($ejercicios2 as $ejercicio2)



  <input type="checkbox" class="form" name="id_ejercicio[]" id="id_ejercicio[]" value="{{ $ejercicio2->id_ejercicio }}"> {{   $ejercicio2->nombre}}<br>


  


  @endforeach


  <br>


  <h5><b>Ejercicios Espalda:</b><br></h5>
  @foreach($ejercicios3 as $ejercicio3)



  <input type="checkbox" class="form" name="id_ejercicio[]" id="id_ejercicio[]" value="{{ $ejercicio3->id_ejercicio }}"> {{   $ejercicio3->nombre}}<br>

  @endforeach


  <br>


  <h5><b>Ejercicios Pierna:</b><br></h5>
  @foreach($ejercicios4 as $ejercicio4)



  <input type="checkbox" class="form" name="id_ejercicio[]" id="id_ejercicio[]" value="{{ $ejercicio4->id_ejercicio }}"> {{   $ejercicio4->nombre}}<br>

  @endforeach






 
 <div class="form-group" onclick="return confirm('Esta seguro?')">
 {!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
 </div>


 
 {!! Form::close() !!}
 </div>
 </div>
 </div>
 </div>
</div>


@endsection