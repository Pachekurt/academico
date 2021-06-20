<div class="modal" id="modalFormRol">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header headerRegister">
                <h6 class="modal-title" id="titleModal"> Nuevo Rol</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body headerRegister">
            <form class="form-horizontal" id="formRol" name="formRol">
            <input type="hidden" id="idRol" name="idRol" value="">
                                    <div class="form-group row">
                                        <label class="col-md-3 form-label">Nombre</label>
                                        <div class="col-md-9">
                                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="" placeholder="Nombre" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-label" for="txtDescripcion">Descripcion</label>
                                        <div class="col-md-9">
                                            <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control" placeholder="Descripcion" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 form-label">Estado</label>
                                        <div class="col-md-9">
                                            <select class="form-control select2" id="listStatus" name="listStatus"  >
                                                <option value="1">Activo</option>
                                                <option value="0">Inactivo</option> 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-indigo" id="btnActionForm"   type="submit"> <span id="btnText">Guardar</span></button> 
                                        <button class="btn btn-light" data-dismiss="modal" type="button">Cancelar</button>
                                             </div>
                                </form>    
                                </div> 
        </div>
    </div>
</div>
 
<div class="modal modalPermisos"  >
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header headerRegister">
                <h6 class="modal-title" id="titleModal"> Permisos Roles de Usuario</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body  ">
            <div class="table-responsive">
                    <table class="table table-bordered text-nowrap"    >
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Módulo</th>
                            <th>Ver</th>
                            <th>Crear</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>