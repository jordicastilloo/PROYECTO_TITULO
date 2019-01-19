
<div class="modal fade" tabindex="-1" id="modal-{{$Ejercicio->id_ejercicio}}" role="dialog" >



    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Descripción Ejercicio</h4>
            </div>



            
            <div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">

                    <p> <img src="{{ $Ejercicio->fotografia }}" height="300" width="300"></p>
            		<p> Descripcion: {{$Ejercicio->descripcion}}</p>
                    <p> Numero de Series: {{$Ejercicio->series}}</p>
                    <p> Intervalo de Repeticiones: {{$Ejercicio->repeticiones}}</p>
                    <p> Video: {{$Ejercicio->video}}</p>
                    


            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

</div>
