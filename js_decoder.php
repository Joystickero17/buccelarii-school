<?php
function decode_json_file($file_name_path,$key){
    /* archivo designado para abrir jsons */
    $file = file_get_contents($file_name_path);
    $json = json_decode($file, true);
    $result_array =array();
    
    
        
    for($i=0;$i<sizeof($json[$key]);$i++)
    array_push($result_array,$json[$key][$i]);
        
    
    
    return $result_array;
}
?>