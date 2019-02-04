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
 {!! Form::text('id_rutina', null, ['class' => 'form-control','placeholder'=>'Ingrese Nombre Cliente (sacar por id de rutina)']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('id_ejercicio', null, ['class' => 'form-control','placeholder'=>'Ingrese id ejercicio']) !!}
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