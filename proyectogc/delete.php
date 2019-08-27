<?php

    session_start();
    include_once('connection.php');
 
    if(isset($_GET['id'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $sql = "DELETE FROM tb_solicitud WHERE id = '".$_GET['id']."'";
            // declaración if-else en la ejecución de nuestra consulta
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Formulario eliminado correctamente' : 'Ocurrió un error. No se pudo eliminar al miembro';
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //cerrar conexión
        $database->close();
 
    }
    else{
        $_SESSION['message'] = 'Seleccione formulario para eliminar';
    }
 
    header('location: index.php');
 
?>