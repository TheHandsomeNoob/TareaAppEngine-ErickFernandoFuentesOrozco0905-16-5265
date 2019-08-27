<!-- Editar -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                 <center><h4 class="modal-title" id="myModalLabel">Editar miembro</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            <form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
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
                        <input type="text" class="form-control" name="adress">
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
   







            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> Actualizar</a>
            </form>
            </div>
 
        </div>
    </div>
</div>
 
<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Borrar Formulario</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">  
                <p class="text-center">¿Estas seguro en borrar los datos de?</p>
                <h2 class="text-center"><?php echo $row['firstname'].' '.$row['lastname']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Cancelar</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span> Si</a>
            </div>
 
        </div>
    </div>
</div>