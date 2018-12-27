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

<!--diseño-->
<div class="col-md-8">
    <div class="box box-danger">
            <div class="box-header">


                <!--AQUI TERMINA-->


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
@if(isset($implementos))
	{!! Form::model($implementos, ['route' => ['implementos.update', $implementos->id_implemento], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'implementos.store']) !!}
@endif

@if(isset($implementos))
 {!! Form::model($implementos, ['route' => ['implementos.update', $implementos->id_implemento], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'implementos.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'implementos.store']) !!}
 


<div class="form-group">
 <label for="">Estado del Implemento</label>
 <select name="estado" id="inputEstado" class="form-control">
 <option value="">-- Seleccione Estado del Implemento --</option>
 <option value ="Deterioro">Deterioro</option>    
 <option value ="Disponible">Disponible</option>
 <option value ="Ver que mas">Ver que mas</option>
 
 </select>
 </div>





 
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