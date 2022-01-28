<div class="container grey lighten-5 border-padding">
<?php 
    if($is_update){
                
        echo '<form action="update.php" method="POST">';
        echo '<input name="id_profesor" type="hidden" value="'.$_GET["id"].'">';
    }else{
        
        echo '<form action="add_prof.php" method="POST">';
    
            }
    
    ?>
    <input name="key" type="hidden" value="profesor">
        <div class="row">
            <div class="col s12 m6">
                <label for="">Nombres</label>
                <input name="Nombre" type="text" value="<?php echo $value_table[1] ?>">
            </div>
            <div class="col s12 m6">
                <label for="" >Apellido</label>
                <input name="Apellido" type="text" value="<?php echo $value_table[2] ?>">
            </div>

        </div>
        <div class="row">
            <div class="col s12 m6">
                <label for="" >Cédula</label>
                <input name="Cedula" type="text" value="<?php echo $value_table[3] ?>">
            </div>
            <!-- <div class="col s12 m6">
            <input type="hidden" name="grado">
                <?php
                
                /* generate_select($value_table[4],$conn,"grado","grado"); */
                ?>
        </div> -->
        <div class="row">
            <div class="col s12">
                <div class="input-field">
                    <label for="" >Dirección</label>
                    <textarea name="direccion" class="materialize-textarea" ><?php echo $value_table[4] ?></textarea>
                </div>
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