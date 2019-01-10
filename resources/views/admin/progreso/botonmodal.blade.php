<div class="modal fade" tabindex="-1" id="modal-progreso-{{$progreso->rut_cl}}" role="dialog" >
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
            		<br>Rut: {{$progreso->rut_cl}}
                    <br>Nombre: {{$progreso->clientes->nombre_cliente}} {{$progreso->clientes->ap_pat_cliente}} 
                    <br>Peso Corporal: {{$progreso->peso_corporal}} Kilogramos
            		<br>Estatura: {{$progreso->estatura}} Centímetros</h4> 

                   <br> <h4>Medidas</h3>

                <h4>
                    <br>Subescapular: {{$progreso->subescapular}}
                    <br>Tricipital: {{$progreso->tricipital}}
                    <br>Bicipital: {{$progreso->bicipital}}
                    <br>Supra Iliaco: {{$progreso->supra_iliaco}}
                    <br>Hombros: {{$progreso->hombros}}
                    <br>Pecho: {{$progreso->pecho}}
                    <br>Biceps Relajado: {{$progreso->biceps_relajado}}
                    <br>Biceps contraido: {{$progreso->biceps_contraido}}
                    <br>Muñeca: {{$progreso->muneca}}
                    <br>Cintura: {{$progreso->cintura}}
                    <br>Cadera: {{$progreso->cadera}}
                    <br>Muslo: {{$progreso->muslo}}
                    <br>Gemelo: {{$progreso->gemelo}}
                    <br>Fecha de Evaluacion: {{$progreso->fecha_evaluacion}}
                </h4>

            	</ul>

            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
