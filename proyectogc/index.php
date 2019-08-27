



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Solicitud de Empleo</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/custom.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.css">
</head>
<body>
<div class="container">
<h1 class="page-header text-center">Formulario de Solicitud de Empleo</h1>
    <div class="row">
        <div class="col-sm-12">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>
            <?php
                session_start();
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-dismissible alert-success" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
 
                    unset($_SESSION['message']);
                }
            ?>
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>DPI</th>
                    <th>Dirección</th>
                    <th>Sexo</th>
                    <th>Lugar de Nacimiento y Fecha de Nacimiento</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>
                    <th>Acción</th>
                </thead>
                <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>




<form action="upload.php" method="post" enctype="multipart/form-data"> 
 <input type="file" name="image" id ="image"/>
 <input type ="submit" name="submit" value= "Enviar" id="submit" />
</form>



                
                <tbody>
                    <?php
                        // incluye la conexión
                        include_once('connection.php');
 
                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM tb_solicitud';
                            foreach ($db->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['dpi']; ?></td>
                                    <td><?php echo $row['adress']; ?></td>
                                    <td><?php echo $row['sex']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <a href="#edit_<?php echo $row['id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
                                       
                                    </td>
                                    <?php include('edit_delete_modal.php'); ?>
                                </tr>
                                <?php
                            }

                        }
                        
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }
 
                        //cerrar conexión
                        $database->close();
 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('add_modal.php'); ?>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="bootstrap/js/custom.js"></script>
</body>
</html>