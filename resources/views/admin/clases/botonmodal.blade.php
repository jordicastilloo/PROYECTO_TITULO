

<div class="modal fade" tabindex="-1" id="modal-delete-{{$clase->id_clase}}" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Datos de la Clase</h4>
            </div>
            <div class="modal-body">

            	<ul>
            		<!--<li>{{$clase->id_clase}}</li>-->
            		<br>Nombre de la Clase: {{$clase->nombre_clase}}
            		<br>Descripcion de la Clase: {{$clase->descripcion_clase}}
            	</ul>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>
