

<div class="modal fade" tabindex="-1" id="modal-{{$Contiene2->rut_cl}}" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Rutina de Ejercicios</h4>

            </div>
 <div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">


                <h4>Ejercicios Día Lunes</h4>


@foreach ($consultaejercicios as $Contiene3)


                <li>{{ $Contiene3->nombre}} </li>

                    

                   
                  @endforeach
</div>

            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            

</div>
</div>
</div>