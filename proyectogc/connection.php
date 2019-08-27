
<?php

class Connection
{
   function open()
{

    $conexion=mysqli_connect(getenv('CLOUDSQL_DSN'),getenv('CLOUDSQL_USER'),getenv('CLOUDSQL_PASSWORD'),
    "prueva");
    if (mysqli_connect_error()) {
        die('No se puede conectar a la base de datos' . mysqli_connect_error($conexion));
    }
    return $conexion;
}
function cerrar(){
    mysql_close($conexion);
}
}

?>