<?php
require("connection.php");
require("redirect.php");
require("config.php");
switch($_GET["type"]){
    case "estudiante":
        $table_name="estudiante";
        $url="estudiante/2";
    break;
    case "profesor":
        $table_name="profesor";
        $url="profesor/2";
    
    break;
    case "materia":
        $table_name="materia";
        $url="materia/2";  
    break;
    case "grado":
        $table_name="grado";
        $url="grado/2";  
    break;

}
$query = "DELETE FROM ".$table_name." WHERE id_".$table_name."=".$_GET["id"];
if ($conn->query($query)){
    redirect($table_file_config.$url);
}else{
    echo "something went wrong". $conn->error;
}


?>