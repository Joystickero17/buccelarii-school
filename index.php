<?php
require("header.php");
?>

<div class="container grey lighten-5 border-padding">
    <div class="row">
        <div class="col s12">
            <h3>Bienvenido al Registro Estudiantil <span class="first-title">Bucellari</span></h3>
        </div>
    </div>
    <div class="row">
        <div class="col l3 fixed-height">
            <img src="img/students.jpg" class="img-index" alt="">
            <a href="registros/estudiante/" class="btn-large waves-effect">Ir a Estudiantes</a></div>
        <div class="col l3 fixed-height">
            <img src="img/teacher.jpg" class="img-index" alt="">
            <a href="registros/profesor/" class="btn-large waves-effect">Ir a Profesores</a></div>
        <div class="col l3 fixed-height">
            <img src="img/grades.png" class="img-index" alt="">
            <a href="registros/materia/" class="btn-large waves-effect">Ir a Materias</a>
        </div>
    </div>
    <div class="row">
        <div class="col l3 fixed-height">
            <img src="img/classroom.jpg" class="img-index" alt="">
            <a href="registros/grado/" class="btn-large waves-effect">Ir a Cursos</a></div>
    </div>

</div>
<?php
require("footer.php");
?>