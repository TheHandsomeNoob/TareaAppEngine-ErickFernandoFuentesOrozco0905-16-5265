<!-- Agregar Nuevo -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Agregar Persona</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                 
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="add.php">
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Nombre Completo:</label>
                    </div>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fname">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">DPI:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="dpi">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Dirección:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>

             

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Sexo:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sex">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Lugar y Fecha de Nacimiento:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="date">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Numero de Telefono:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-2">
                        <label class="control-label" style="position:relative; top:7px;">Correo Electronico:</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>




            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="fa fa-save"></span> Guardar</a>
            </form>
            </div>
 
        </div>
    </div>
</div>