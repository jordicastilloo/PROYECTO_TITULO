<script type="text/javascript">
function buscar()
{
document.getElementById('rut_cl').style.display = 'none';
//document.getElementById('progreso').style.display = 'block';
}
</script>



<!-- Modal -->
  <div class="modal fade" id="Modal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
          <h4 class="modal-title">Ingrese RUT</h4>
        </div>
        <div class="modal-body">




     <div id="panel2" class="panel panel-primary">
  <div class="panel-heading">rut</div>
  <div class="panel-body">   

@if(isset($clientes))
 {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->rut_cliente], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'clientes.store']) !!}
@endif
 


 <div class="panel-body" id="rut">
 {!! Form::open(['route' => 'clientes.store']) !!}
 
 <div class="form-group">
 {!! Form::text('rut_cliente', null,
 ['class'=>'form-control', 'placeholder'=>'Ingrese Rut'])
 !!}
 <input type="button" value="Buscar" onclick="buscar()">
 </div>
</div>


	<div id="progreso" style='display:none;'>





@if(isset($progreso))
{!! Form::model($progreso, ['route' => ['progreso.update', $progreso->id_progreso], 'method' => 'patch']) !!}
@else
	{!! Form::open(['route' => 'progreso.store']) !!}
@endif

@if(isset($progreso))
 {!! Form::model($progreso, ['route' => ['progreso.update', $progreso->id_progreso], 'method' => 'patch']) !!}
@else
 {!! Form::open(['route' => 'progreso.store']) !!}
@endif

 <div class="panel-body">
 {!! Form::open(['route' => 'progreso.store']) !!}
 
 <div class="form-group">
 {!! Form::text('peso_corporal', null, ['class' => 'form-control','placeholder'=>'Ingrese Peso Corporal']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::text('estatura', null, ['class' => 'form-control','placeholder'=>'Ingrese Estatura']) !!}
 </div>
 
  <div class="form-group">
 {!! Form::text('subescapular', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Subescapular']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('tricipital', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Tricipital']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('bicipital', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Bicipital']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('supra_iliaco', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Supra Iliaco']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('hombros', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Hombros']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('pecho', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Pecho']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('biceps_relajado', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Biceps relajado']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('biceps_contraido', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Biceps contraido']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('muneca', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Muneca']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('cintura', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Cintura']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('cadera', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Cadera']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('muslo', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Muslo']) !!}
 </div>

 <div class="form-group">
 {!! Form::text('gemelo', null, ["class" => 'form-control','placeholder'=>'Ingrese medida Gemelo']) !!}
 </div>
 
 <div class="form-group">
 {!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
 </div>
 
 {!! Form::close() !!}
		</div>
</div>
</div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>