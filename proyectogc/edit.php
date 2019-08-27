<?php

    session_start();
    include_once('connection.php');
 
    if(isset($_POST['edit'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $id = $_GET['id'];
            $fname = $_POST['fname'];
            $dpi = $_POST['dpi'];
            $adress = $_POST['adress'];
            $sex = $_POST['sex'];
            $date = $_POST['date'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $sql = "UPDATE tb_solicitud SET fname = '$fname', dpi = '$dpi', adress = '$adress', sex = '$sex', date = '$date', phone = '$phone', email = '$email' WHERE id = '$id'";
            // declaración if-else en la ejecución de nuestra consulta
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Los datos se actualizaron' : 'Ocurrio un error. No se pudo actualizar';
 
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //cerrar conexión 
        $database->close();
    }
    else{
        $_SESSION['message'] = 'Primero debe llenar el form';
    }
 
    header('location: index.php');
 
?>