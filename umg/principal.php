<?php
    require_once('includes/conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/css/bootstrap.css">
    <link rel="stylesheet" href="includes/css/custom.css">
    <title>Modulos</title>
</head>
<body class="body">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="includes/img/logo2.png" width="135" height ="45"  alt="">
                    </a>
                </div>
                <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Persona
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                            <li><a class="menu" id="Nuevo">Nuevo</a></li>
                            <li><a class="menu" href="#">Listar</a></li>
                            <li><a class="menu" href="#">Modificar</a></li>
                            <li><a class="menu" href="#">Editar</a> </li>
                    </ul>
                </li>

                </ul>
            </div>
        </nav>
        <div id="contenedor" class="container"></div>
    </div>



    <script src="includes/js/jquery.js"></script>
    <script src="includes/js/bootstrap.js"></script>
    <script src="includes/js/comandos.js"></script>
</body>
</html>
