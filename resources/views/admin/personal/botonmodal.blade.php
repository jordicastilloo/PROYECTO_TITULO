

<div class="modal fade" tabindex="-1" id="modal-delete-{{$Persona->rut_p}}" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Datos de la Persona</h4>
            </div>
            <div class="modal-body">

            	<ul>
            		<br>Rut de la Persona: {{$Persona->rut_p}}
                    <br>Rut de la Persona: {{$Persona->tipo_p}}
            		<br>Nombre de la Persona: {{$Persona->nombre_p}}
                    <br>Rut de la Persona: {{$Persona->ap_pat_p}}
                    <br>Rut de la Persona: {{$Persona->ap_mat_p}}
                    <br>Rut de la Persona: {{$Persona->telefono_p}}
                    <br>Rut de la Persona: {{$Persona->email_p}}
                    <br>Rut de la Persona: {{$Persona->contrasena_p}}
                    <br>Rut de la Persona: {{$Persona->nacionalidad_p}}
                    <br>Rut de la Persona: {{$Persona->fecha_nac_p}}
                    <br>Rut de la Persona: {{$Persona->sexo_p}}
                    <br>Rut de la Persona: {{$Persona->profesion_p}}
                    <br>Rut de la Persona: {{$Persona->fotografia_p}}
            	</ul>
                
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
