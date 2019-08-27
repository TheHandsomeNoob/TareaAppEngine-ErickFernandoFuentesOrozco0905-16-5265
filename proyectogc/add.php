<?php

    session_start();
    include_once('connection.php');
 
    if(isset($_POST['add'])){
        $database = new Connection();
        $db = $database->open();
        try{
            // hacer uso de una declaración preparada para evitar la inyección de sql
            $stmt = $db->prepare("INSERT INTO tb_solicitud (fname, dpi, adress,sex,date,phone,email) VALUES (:fname, :dpi, :adress,:sex,:date,:phone,:email)");
            // declaración if-else en la ejecución de nuestra declaración preparada
            $_SESSION['message'] = ( $stmt->execute(array(':fname' => $_POST['fname'] , ':dpi' => $_POST['dpi'] , ':adress' => $_POST['address'], ':sex' => $_POST['sex'], ':date' => $_POST['date'], ':phone' => $_POST['phone'], ':email' => $_POST['email'])) ) ? 'Formulario agregado correctamente' : 'Something went wrong. Cannot add member'; 
         
        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }
 
        //cerrar conexión
        $database->close();
    }
 
    else{
        $_SESSION['message'] = 'Fill up add form first';
    }
 
    header('location: index.php');
     
?>