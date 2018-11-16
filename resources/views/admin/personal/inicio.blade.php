@extends('admin.layout')
 
@section('content')

<!--
<div class="container">
<div class="row">
 <div class="col-md-3">-->

<div class="container">
 <div class="row">
 <div class="col-md-10 col-md-offset-1">
 





 {!! Html::link(route('personal.create'), 'Crear', array('class' => 'btn btn-info btn-md pull-right')) !!} 


</div>


 <div class="row">
 <div class="col-md-10 col-md-offset-1">
      @if(!$personal->isEmpty())
          <table class="table table-bordered">
              <tr>
                <th>Rut</th>
                <th>Nombre</th>
                <th>Apellido Materno</th>
                <th>Apellido Paterno</th>
                <th>Cargo</th>


                <!--
                <th>Telefono</th>
                <th>Email</th>
                <th>Tipo</th>
              
                <th>Fecha de Nacimiento</th>
                <th>Sexo</th>
                <th>Alergico</th>
                <th>Patologia</th>
                <th>Fotografia</th> -->
              </tr>
              @foreach ($personal as $Persona)
                  <tr>
                    <td width="500">{{ $Persona->rut_p}}</td>
                    <td width="500">{{ $Persona->nombre_p}}</td>
                    <td width="500">{{ $Persona->ap_pat_p}}</td>
                    <td width="500">{{ $Persona->ap_mat_p}}</td>
                    <td width="500">{{ $Persona->profesion_p}}</td>


                    <!--
                    <td width="500">{{ $Persona->Telefono}}</td>
                    <td width="500">{{ $Persona->Email}}</td>
                    <td width="500">{{ $Persona->Tipo}}</td>
                    
                   
                    <td width="500">{{ $Persona->Fecha_nacimiento}}</td>
                    <td width="500">{{ $Persona->Sexo}}</td>
                    <td width="500">{{ $Persona->Alergico}}</td>
                    <td width="500">{{ $Persona->Patologia}}</td>
                    <td width="500">{{ $Persona->Fotografia}}</td>  -->
                    <td width="60" align="center">
                      {!! Html::link(route('personal.edit', $Persona->rut_p), 'Editar', array('class' => 'btn btn-success btn-md')) !!}
                    </td>
                    <td width="60" align="center">
                      {!! Form::open(array('route' => array('personal.destroy', $Persona->rut_p), 'method' => 'DELETE')) !!}
                          <button type="submit" class="btn btn-danger btn-md">Eliminar</button>
                      {!! Form::close() !!}
                    </td>
                  </tr>
              @endforeach
          </table>
          
             
      


      @endif
 </div>
 </div>
</div>
@endsection