<?php 
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
//echo "http://" . $host . $url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="include/css/bootstrap.css">
    
  
    <link rel="stylesheet" href="include/css/mega-menu.css">
    <link rel="stylesheet" href="include/css/custom.css">

   <script src="include/js/comandos.js"></script>
    <script src="include/js/mega-menu.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="include/Date/src/DateTimePicker.css" />
    <script type="text/javascript" src="include/Date/src/DateTimePicker.js"></script>
    <title>Modulo Odontología</title>
</head>
<body>
    <div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img alt="Logo" src="https://www.solodev.com/assets/side-nav/logo.png"></a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="#">Inicio</a></li>
            <li class="dropdown menu-large">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Nutrición <b class="caret"></b> </a>
            <ul class="dropdown-menu megamenu row">
            <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">ALIMENTO</li>
                    <li class="seleccion"><a  onClick="CargarPagina('#contenido','view/Ialimento.php')">Ingresar Alimentos</a></li>
                    <li class="seleccion"><a  onClick="CargarPagina('#contenido','view/Ralimento.php')">Reporte de Alimentos</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">TIEMPO DE COMIDA</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/AddTiempo.php')">Ingresar Tiempos</a></li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/Rtiempo.php')">Reporte de Tiempo de Comida</a></li>
                    <li class="divider"></li>
                </ul>
                </li>
                <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">ESPECIALIDAD MÉDICO</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/Respecialidad.php')">Reporte de Especialidades</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">MEDICO</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/addMedico.php')">Nuevo Medico</a></li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/Rmedico.php')">Reporte de Medicos</a></li>
                </ul>
                </li>
                <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">CITA</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/addCita.php')">Asignar Cita</a></li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Reporte de Citas</a></li>
                </ul>
                </li>
                <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">DIETA</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Nueva Dieta</a></li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Reporte de Dientas</a></li>
                </ul>
                </li>
            </ul>
            </li>
            <li class="dropdown menu-large">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Odontología <b class="caret"></b></a>          
            <ul class="dropdown-menu megamenu row">
            <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">TIPO PACIENTE</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Nuevo Tipo</a></li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Asignación Tipo Paciente</a></li>
                </ul>
                </li>
                <li class="col-sm-3">
                <ul>
                    <li class="dropdown-header">PACIENTE ODONTOLOGIA</li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Nuevo paciente</a></li>
                    <li class="seleccion"><a onClick="CargarPagina('#contenido','view/prueba.php')">Reporte de pacientes</a></li>
                </ul>
                </li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </div>
    <div class="container" id="contenido">

    </div>
</body>
</html>