<?php
require("connection.php");
require("config.php");
require("redirect.php");
$name = $_POST["name"];
$last_name = $_POST["last_name"];
$cedula = $_POST["cedula"];
$address = $_POST["address"];
$grado = $_POST["grado"];

$query = "INSERT INTO ESTUDIANTE (NAME, last_name, cedula, grado, ADDRESS) VALUES ('". $name ."','". $last_name ."','". $cedula ."',".$grado.",'".$address."')";

if ($conn->query($query)==TRUE){
    
    
    redirect($table_file_config."estudiante/1");
}else{
    echo $query;
 echo "error en la consulta de inserción". $conn->error;
}
?>