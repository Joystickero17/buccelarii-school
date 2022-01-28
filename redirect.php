<?php
function redirect($file, $get_args=Array()){
    if (sizeof($get_args)>0){

        $args_str = "";
        if (sizeof($get_args)>1){
            foreach($get_args as $arg){
                $args_str+="&".$arg;
            }
    
        }else{
            $args_str=$get_args[0];
        }
        header("Location:".$file."?".$args_str);
        
    }else{
        header("Location:".$file);
    }
    die();
}
?>