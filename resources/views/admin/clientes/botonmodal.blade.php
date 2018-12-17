<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<div class="modal fade" tabindex="-1" id="modal-delete-{{$Cliente->rut_cliente}}" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Datos de la Persona</h4>
            </div>
            <div class="modal-body">





            	<ul>
            		<br><h4>Rut: {{$Cliente->rut_cliente}}
            		<br>Nombre: {{$Cliente->nombre_cliente}}
                    <br>Apellido Paterno: {{$Cliente->ap_pat_cliente}}
                    <br>Apellido Materno: {{$Cliente->ap_mat_cliente}}
                    <br>Telefono: {{$Cliente->telefono_cliente}}
                    <br>Email: {{$Cliente->email_cliente}}
                    <br>Nacionalidad: {{$Cliente->nacionalidad_cliente}}
                    <br>Fecha de Nacimiento: {{$Cliente->fecha_nac_cliente}}
                    <br>Genero: {{$Cliente->sexo_cliente}}
                    <br>Alergia: {{$Cliente->alergia_cliente}}
                    <br>Patologia: {{$Cliente->patologia_cliente}}
                    <br>Fotografia: {{$Cliente->fotografia_cliente}}

            	</ul>

            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
