<?php
require("connection.php");
require("config.php");
require("redirect.php");
$name = $_POST["nombre"];

$query = "INSERT INTO Materia (nombre) VALUES ('". $name."')";

if ($conn->query($query)==TRUE){
    
    
    redirect($table_file_config."materia/1");
}else{
    echo $query;
    echo "error en la consulta de inserción". $conn->error;
}
?>