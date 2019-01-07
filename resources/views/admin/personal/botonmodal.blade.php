
<div class="modal fade" tabindex="-1" id="modal-delete-{{$Persona->rut_p}}" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Datos de la Persona</h4>
            </div>
            <div class="modal-body">

<div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">



            	<ul>
                    <p> <img src="{{$Persona->fotografia_p}}" height="200" width="200"></p>
            		<br><h4>Rut: {{$Persona->rut_p}}
                    <br>Cargo: {{$Persona->tipo_p}}
            		<br>Nombre: {{$Persona->nombre_p}}
                    <br>Apellido Paterno: {{$Persona->ap_pat_p}}
                    <br>Apellido Materno: {{$Persona->ap_mat_p}}
                    <br>Telefono: {{$Persona->telefono_p}}
                    <br>Email: {{$Persona->email_p}}
                    <br>Contraseña: {{$Persona->contrasena_p}}
                    <br>Nacionalidad: {{$Persona->nacionalidad_p}}
                    <br>Fecha de Nacimiento: {{$Persona->fecha_nac_p}}
                    <br>Genero: {{$Persona->sexo_p}}
                    <br>Profesion: {{$Persona->profesion_p}}
            	</ul>

            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
