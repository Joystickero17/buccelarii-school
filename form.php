<!DOCTYPE html>
<html lang="en">

<?php
require("header.php");
require("get_data.php");
$is_update = false;
if (isset($_GET["type"]) && isset($_GET["id"])){
    # cuando existe una actualización o visualización del dato de la tabla
    $is_update = true;
    $value_table=array('','','',0,'','');
    
    $tipo = $_GET["type"];
    $id=$_GET["id"];
    
    $result=get_data_by_id($conn,$tipo,$id);
    
    for($i=0;$i<sizeof($result);$i++){
        $value_table[$i]=$result[$i];
    }
}else{

    # cuando se va a ingresar un registro nuevo
    $value_table=array('','','',0,'','');
}
?>
<?php 
switch($_GET["type"]){
    case "estudiante":
        include("forms/estudiante_form.php");
    break;
    case "profesor":
        include("forms/prof_form.php");
    break;
    case "materia":
        include("forms/materia_form.php");
    break;
    case "grado":
        include("forms/grado_form.php");
    break;
    
}

?>

    <?php
    require("footer.php");
    ?>

    </body>

</html>