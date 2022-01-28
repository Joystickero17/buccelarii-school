<?php
require("connection.php");
require("config.php");
require("redirect.php");
$name = $_POST["grado"];
$id_seccion = $_POST["seccion"];

$query = "INSERT INTO grado (grado,seccion) VALUES ('". $name."','".$id_seccion."')";

if ($conn->query($query)==TRUE){
    
    
    redirect($table_file_config."grado/1");
}else{
    echo $query;
    echo "error en la consulta de inserción". $conn->error;
}
?>