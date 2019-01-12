<div class="modal fade" tabindex="-1" id="modal-{{$Progreso->id_progreso}}" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Progreso del Cliente</h4>
            </div>
            <div class="modal-body">

<div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">



            	<ul><h4>
            		<br>Rut: {{$Progreso->rut_cl}}
                    <br>Nombre: {{$Progreso->clientes->nombre_cliente}} {{$Progreso->clientes->ap_pat_cliente}} 
                    <br>Peso Corporal: {{$Progreso->peso_corporal}} Kilogramos
            		<br>Estatura: {{$Progreso->estatura}} Centímetros</h4> 

                <h4>
                    <br>Subescapular: {{$Progreso->subescapular}}
                    <br>Tricipital: {{$Progreso->tricipital}}
                    <br>Bicipital: {{$Progreso->bicipital}}
                    <br>Supra Iliaco: {{$Progreso->supra_iliaco}}
                    <br>Hombros: {{$Progreso->hombros}}
                    <br>Pecho: {{$Progreso->pecho}}
                    <br>Biceps Relajado: {{$Progreso->biceps_relajado}}
                    <br>Biceps contraido: {{$Progreso->biceps_contraido}}
                    <br>Muñeca: {{$Progreso->muneca}}
                    <br>Cintura: {{$Progreso->cintura}}
                    <br>Cadera: {{$Progreso->cadera}}
                    <br>Muslo: {{$Progreso->muslo}}
                    <br>Gemelo: {{$Progreso->gemelo}}
                    <br>Fecha de Evaluacion: {{$Progreso->fecha_evaluacion}}
                </h4>

            	</ul>


            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
