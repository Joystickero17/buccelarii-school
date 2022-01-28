<div class="container grey lighten-5 border-padding">
    <?php 
    if($is_update){
                
        echo '<form action="update.php" method="POST">';
        echo '<input name="id_materia" type="hidden" value="'.$_GET["id"].'">';
    }else{
        
        echo '<form action="add_materia.php" method="POST">';
    
            }
    
    ?>
    
    <input name="key" type="hidden" value="materia">
        <div class="row">
            <div class="col s12 m6">
                <label for="">Nombre de la Materia:</label>
                <input name="nombre" type="text" value="<?php echo $value_table[1] ?>">
            </div>
            

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