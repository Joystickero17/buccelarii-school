<!DOCTYPE html>
<html lang="en">

<?php 
require("config.php");
echo "<base href=".$PROJECT_NAME.">";
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pagina de Inicio Registros</title>
    <link rel="stylesheet" href="css/materialize.css" />
    <link rel="stylesheet" href="css/auxiliari.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="light-blue darken-3">
    <nav>
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo">Bucellari</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="registros/estudiante/">Estudiantes</a></li>
                <li><a href="registros/profesor/">Profesores</a></li>
                <li><a href="registros/materia/">Materias</a></li>
                <li><a href="registros/grado/">Cursos</a></li>
                
                
            </ul>
        </div>
    </nav>

    <ul id="mobile-demo" class="sidenav">
        <li><a href="#">Estudiantes</a></li>
        <li><a href="#">Profesores</a></li>
        <li><a href="#">Materias</a></li>
        <li><a href="#">Cursos</a></li>
        
    </ul>