
<div class="modal fade" tabindex="-1" id="modal-{{$Ejercicio->id_ejercicio}}" role="dialog" >



    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Descripción Ejercicio</b></h4>
            </div>



            
            <div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">

                    <p><h4><b>Ejercicio: {{$Ejercicio->nombre}}</b></h4></p>
                    <p> <img src="{{ $Ejercicio->fotografia }}" height="300" width="300"></p>
            		<p> <b>Descripcion:</b> {{$Ejercicio->descripcion}}</p>
                    <p> <b>Numero de Series:</b> {{$Ejercicio->series}}</p>
                    <p> <b>Intervalo de Repeticiones:</b> {{$Ejercicio->repeticiones}}</p>
                    <!--<p> Video: {{$Ejercicio->video}}</p>-->
                    


                        <iframe width="420" height="315"
src="https://www.youtube.com/embed/{{$Ejercicio->video}}">
</iframe>







            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

</div>
