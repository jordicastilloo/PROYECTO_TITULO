<div class="modal fade" tabindex="-1" id="modal-{{$Contiene->id_cont}}" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Rutina de Ejercicios</h4>
            </div>
            <div class="modal-body">

<div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">


<!--<p> <img src="../imagenes/mediciones.jpg" height="300" width="300"></p>-->

            	<ul><h4>
            	<br> {{$Contiene->nombre}}
                 <p> <b></b> {{$Contiene->clasificacion}}</p>
                  <p> <b></b> {{$Contiene->tipo}}</p>
                <p> <img src="{{ $Contiene->fotografia }}" height="300" width="300"></p>
                    <p> <b>Descripcion:</b> {{$Contiene->descripcion}}</p>
                    <p> <b>Numero de Series:</b> {{$Contiene->series}}</p>
                    <p> <b>Intervalo de Repeticiones:</b> {{$Contiene->repeticiones}}</p>
                     <p> <b>Intervalo de Repeticiones:</b> {{$Contiene->repeticiones}}</p>
                      <iframe width="420" height="315"
src="https://www.youtube.com/embed/{{$Contiene->video}}">
</iframe>


                                   </h4> 

              
            	</ul>
                       </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
