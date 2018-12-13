
<div class="modal fade" id="edit-modal-{{$implemento->id_implemento}}" method="POST">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" align="center"><b>Agregar Estado del Implemento</b></h4>
                  </div>
                  <div class="modal-body">

<!--
                    <form role="form" action="/implementos/createUpdate/ {{$implemento->id_implemento}}">-->

                        <form action="{{route('implementos.edit')}}" method="post" id=EstadoImplementos class=form-horizontal>




                   <!-- <input type="hidden" name="estado" value="<?php echo csrf_token(); ?>"-->
                    <div class="box-body">
                        <div class="form-group">
                          <label for="InputEstado">Estado</label> 
                          <input type="text" class="form-control" name="estado" placeholder="Ingrese Estado Implemento" value="{{$implemento->estado}}">
                        </div>

                        <!--
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label> 
                          <input type="text" class="form-control" name="username" placeholder="Enter username" value="{{$implemento->username}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label> 
                          <input type="text" class="form-control" name="email" placeholder="Enter email" value="{{$implemento->email}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Contact</label> 
                          <input type="text" class="form-control" name="contact" placeholder="Enter contact" value="{{$implemento->contact}}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Change Password</label> 
                          <input type="password" class="form-control" name="change_password" placeholder="Enter password">
                        </div>
                      </div> -->


                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="btnSave">Ingresar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> 

