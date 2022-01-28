<?php
require("header.php");
require("config.php");
require("get_data.php");
if (isset($_GET["type"])){
    $tipo = $_GET["type"];
}else{
    http_response_code(404);
    include('404page.php'); // provide your own HTML for the error page
    die();
}
?>


    


    <?php
    if (isset($_GET["ok"])) {
        if ($_GET["ok"] == 1) {

            echo "<div class='container green accent-3 border-padding'>";
            echo "<div class='row'>";
            echo "<div class='col s12'>";
            echo "Registro Agregado Satisfactoriamente";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<div class='container red accent-3 border-padding'>";
            echo "<div class='row'>";
            echo "<div class='col s12'>";
            echo "Registro Borrado Satisfactoriamente";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>

    
    <div class="container grey lighten-5 border-padding">

        <div class="row">
            <div class="col s3 offset-s9">
                <?php
                get_add_buttons($tipo);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <table>
                    <thead>
                        <?php
                        

                            get_theads($tipo);
                        
                        ?>
                    </thead>
                    <tbody>

                        <?php
                        switch($tipo){
                            case "grado":
                                
                                get_data($conn, $tipo,"SELECT id_grado,grado,seccion.seccion from grado inner join seccion on grado.seccion=seccion.id_sección");
                            break;
                            default:
                            get_data($conn, $tipo);
                        }
                        
                        ?>

                    </tbody>
                </table>
            </div>
        </div>

        <?php
        require("footer.php");
        ?>