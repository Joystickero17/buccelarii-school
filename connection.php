<?php
require("config.php");

$conn = mysqli_connect($servername, $username, $password, $db_name);


if(!$conn){
    die("Conexión Fallida - contacte con el administrador" . mysqli_connect_error());
}

?>