<div class="container grey lighten-5 border-padding">
<?php 
    if($is_update){
                
        echo '<form action="update.php" method="POST">';
        echo '<input name="id_grado" type="hidden" value="'.$_GET["id"].'">';
    }else{
        
        echo '<form action="add_grado.php" method="POST">';
            }
    
    ?>
    <input name="key" type="hidden" value="grado">

    
        <div class="row">
            <div class="col s12 m6">
                <label for="" >Grado</label>
                <input name="grado" type="text" value="<?php echo $value_table[1] ?>">
            </div>

        </div>
        <div class="row">
            
            <div class="col s12 m6">
                <?php
                
                generate_select($value_table[2],$conn,"seccion","seccion");
                ?>
        </div>
        
        <?php 
        if($is_update){
            
            echo '<button class="btn waves-effect waves-light blue darken-2"><i class="material-icons right">autorenew</i>Actualizar</button>';
            echo '<button class="btn waves-effect waves-light pink"><i class="material-icons right">delete</i>Eliminar</button>';
        }else{
            echo '<button class="btn waves-effect waves-light"><i class="material-icons right">add</i>Registrar</button>';

        }
        
        ?>
    </form>