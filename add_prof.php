<?php
require("connection.php");
require("config.php");
require("redirect.php");
$name = $_POST["Nombre"];
$last_name = $_POST["Apellido"];
$cedula = $_POST["Cedula"];
$address = $_POST["direccion"];


$query = "INSERT INTO Profesor (nombre, apellido, cedula, direccion) VALUES ('". $name ."','". $last_name ."','". $cedula ."','".$address."')";

if ($conn->query($query)==TRUE){
    
    
    redirect($table_file_config."profesor/1");
}else{
    echo $query;
 echo "error en la consulta de inserción". $conn->error;
}
?>