<?php
    require("js_decoder.php");
    require("connection.php");
    require("redirect.php");
    function build_args($array_names,$post){
        /* construir argumentos de la consulta */
        $colon="',";
        $str_result = '';
        for($i=1;$i<sizeof($array_names);$i++){
            if ($i+1==sizeof($array_names)){
                $colon="'";
            }
            if(is_int(gettype($post[$array_names[$i]]))){
                $str_result .= $array_names[$i]."=".strval($post[$array_names[$i]]).$colon." ";
            }else{

                $str_result .= $array_names[$i]."='".strval($post[$array_names[$i]]).$colon." ";
            }
        }
        return $str_result;
    }

    $key = $_POST["key"];
    $id = $_POST["id_".$key];
    $result = decode_json_file("json_data/theads_bd.json",$key);
    $query = "update ".$key." set ".build_args($result,$_POST)." where id_".$key."=".$id;
    if($conn->query($query)==TRUE){
        redirect("registros/".$key."/");
    }else{
        echo $query;
        echo "\nUn error ha ocurrido".$conn->error;
    }
    /* echo "update table ".$key." set ".build_args($result,$_POST)." where id_".$key."=".$id; */

    /* $row = $conn->query("update table ".$key." set "..) */


?>