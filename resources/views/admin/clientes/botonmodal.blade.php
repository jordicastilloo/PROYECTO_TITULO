


<div class="modal fade" tabindex="-1" id="modal-{{$Cliente->rut_cl}}" role="dialog" >



    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Datos de la Persona</h4>
            </div>



            
            <div class="modal-body" style="max-height: calc(100vh - 210px);overflow-y: auto"; align="center">


                     <p> <img src="{{$Cliente->fotografia_cliente}}" height="200" width="200"></p>
            		<p> Rut: {{$Cliente->rut_cl}}</p>
            		<p> Nombre: {{$Cliente->nombre_cliente}}</p>
                    <p> Apellido Paterno: {{$Cliente->ap_pat_cliente}}</p>
                    <p> Apellido Materno: {{$Cliente->ap_mat_cliente}}</p>
                    <p> Direccion: {{$Cliente->direccion_cliente}}</p>
                    <p> Telefono: {{$Cliente->telefono_cliente}}</p>
                    <p> Email: {{$Cliente->email_cliente}}</p>
                    <p> Nacionalidad: {{$Cliente->nacionalidad_cliente}}</p>
                    <p> Fecha de Nacimiento: {{$Cliente->fecha_nac_cliente}}</p>
                    <p> Genero: {{$Cliente->sexo_cliente}}</p>
                    <p> Alergia: {{$Cliente->alergia_cliente}}</p>
                    <p> Patologia: {{$Cliente->patologia_cliente}}</p>
                   

                   
            


            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>

</div>
