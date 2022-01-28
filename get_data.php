<?php
require("connection.php");
require("js_decoder.php");

function get_theads($table_name){
    $theads=decode_json_file("json_data/theads.json", $table_name);
    for($i=0;$i<sizeof($theads);$i++){
        echo "<th>".$theads[$i]."</th>";
    }
    
}

function get_data($conn, $table,$custom_query=NULL){
    if($custom_query){
        $query =$custom_query;
    }else{

        $query = "SELECT * from ".$table;
    }
    
    $result = $conn->query($query);
    if($result->num_rows >0){
        while($row = $result->fetch_row()){
            
            echo "<tr>";
            for ($i=0;$i<sizeof($row);$i++){
                
                echo "<td>".$row[$i]."</td>";
            }
            echo "<td><a class='btn waves-effect pink' href='delete.php?id=".$row[0]."&type=".$table."'>Borrar</a><a class='btn waves-effect blue' href='".$table."/".$row[0]."'>Editar</a></td>";
            
        }
    }else{
        echo "<tr>";
        echo "<td>No existen Registros de ".$table." <a class='btn waves-effect' href='".$table."/'>Agregar</a></td>";
        echo "</tr>";
    }
    
}

function get_data_by_id($conn, $table, $id){
    $query = "SELECT * FROM ".$table." WHERE id_".$table."=".$id;
    $row = $conn->query($query);
    
    
    return $row->fetch_row();

}

function generate_select($value=0,$conn, $name, $table_name){
    /* 
        $name es el nombre del select para ser mandado por request 
        $table_name es el nombre de la tabla en la BBDD
        $value es el valor a seleccionar en el select, solo si proviene de un update de tables.php
    */
    switch ($name){
        case 'grado':
            $query = "SELECT id_grado,grado,seccion.seccion FROM ".$table_name." INNER JOIN seccion on ".$table_name.".seccion=seccion.id_sección";
            /* if ($value==0){
                $query = "SELECT id_grado,grado,seccion.seccion FROM ".$table_name." INNER JOIN seccion on ".$table_name.".seccion=seccion.id_sección";
        
            }else{
                $query = "SELECT id_grado,grado,seccion.seccion FROM ".$table_name." INNER JOIN seccion on ".$table_name.".seccion=seccion.id_sección WHERE id_grado='".$value."'";
        
            } */
        break;
        case 'seccion':
            
            $query = "SELECT * FROM ".$table_name;
            /* if ($value==0){
                
            }else{
                $query = "SELECT * FROM ".$table_name." INNER JOIN seccion on ".$table_name.".seccion=seccion.id_sección WHERE id_grado='".$value."'";
        
            } */
        break;
    }
    
    
    $row = $conn->query($query);
    
    echo "<label for=''>".$table_name . "</label>";
    echo "<select id='select_filter' name='".$name."'>";
    
    
    echo "<option value='0' selected='selected'>Seleccione una opción</option>";
    while($result = $row->fetch_row()){
        echo $result[0]==$value;
        /* if ($value==0){
            
            
        }else{
            echo "<option value='0'>Seleccione una opción</option>";
        } */
        if($result[0]==$value){
            
            echo "<option value='".$result[0]."' selected='selected'>".$result[1]." ".$result[2]."</option>";
        }else{
            echo "<option value='".$result[0]."'>".$result[1]." ".$result[2]."</option>";
        }
    }
    
    
    echo "</select>";

}
function get_add_buttons($name){
    echo '<a class="btn waves-effect" href="'.$name.'/"><i class="material-icons right">add</i>Añadir '.$name.'</a>';

}