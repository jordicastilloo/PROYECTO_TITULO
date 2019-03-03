

<div class="modal fade" tabindex="-1" id="{{$Contiene->rut_cl}}" role="dialog" value="{{$Contiene->rut_cl}}">
            

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Rutina de Ejercicios</h4>

            </div>
 <div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">





                <h4><b>Ejercicios Día Lunes</b></h4>


@foreach ($consultaejercicios as $Contiene3)


                <li>{{ $Contiene3->nombre}} </li>

                    

                   
                  @endforeach










<!--
                  <h4><b>Ejercicios Día Martes</b></h4>


@foreach ($consultaejerciciosdiaMartes as $Contiene4)


                <li>{{ $Contiene4->nombre}} </li>

                    

                   
                  @endforeach


                  <h4><b>Ejercicios Día Miercoles</b></h4>


@foreach ($consultaejerciciosdiaMiercoles as $Contiene5)


                <li>{{ $Contiene5->nombre}} </li>

                    

                   
                  @endforeach


                  <h4><b>Ejercicios Día Jueves</b></h4>


@foreach ($consultaejerciciosdiaJueves as $Contiene6)


                <li>{{ $Contiene6->nombre}} </li>

                    

                   
                  @endforeach



                  <h4><b>Ejercicios Día Viernes</b></h4>


@foreach ($consultaejerciciosdiaViernes as $Contiene7)


                <li>{{ $Contiene7->nombre}} </li>

                    

                   
                  @endforeach



    <h4><b>Ejercicios Día Sabado</b></h4>


@foreach ($consultaejerciciosdiaSabado as $Contiene8)


                <li>{{ $Contiene8->nombre}} </li>

                    

                   
                  @endforeach



        <h4><b>Ejercicios Día Domingo</b></h4>


@foreach ($consultaejerciciosdiaDomingo as $Contiene9)


                <li>{{ $Contiene9->nombre}} </li>

                    

                   
                  @endforeach
-->







</div>

            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            

</div>
</div>
</div>