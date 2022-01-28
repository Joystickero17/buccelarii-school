<?php
require("connection.php");
require("redirect.php");
require("config.php");

$query = "DELETE FROM profesor WHERE id_profesor=".$_GET["id"];
if ($conn->query($query)){
    redirect($table_file_config."profesor/2");
}else{
    echo "something went wrong". $conn->error;
}


?>