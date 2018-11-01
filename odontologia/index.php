<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css"> 
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/vector-map/jqvmap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <title>Modulo Ondontologia</title>
</head>
<body>

  <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="assets/img/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="assets/img/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">DIETA</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cutlery"></i>Alimento</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="index.php">Nuevo</a></li>
                            <li><i class="fa fa-search"></i><a href="index.php">Buscar</a></li>
                            <li><i class="fa fa-pencil"></i><a href="index.php">Editar</a></li>
                            <li><i class="fa fa-trash"></i><a href="index.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bolt"></i>Tiempo de Comida</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="index.php">Nuevo</a></li>
                            <li><i class="fa fa-search"></i><a href="index.php">Buscar</a></li>
                            <li><i class="fa fa-pencil"></i><a href="index.php">Editar</a></li>
                            <li><i class="fa fa-trash"></i><a href="index.php">Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-heartbeat"></i>Dieta</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="index.php">Nueva Dieta</a></li>
                            <li><i class="fa fa-search"></i><a href="index.php">Buscar Dieta</a></li>
                            <li><i class="fa fa-pencil"></i><a href="index.php">Editar Dieta</a></li>
                            <li><i class="fa fa-trash"></i><a href="index.php">Eliminar Dieta</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Odontología</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-stethoscope"></i>Odontología</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="index.php">Nuevo Registro</a></li>
                            <li><i class="fa fa-search"></i><a href="index.php">Buscar Registro</a></li>
                            <li><i class="fa fa-pencil"></i><a href="index.php">Editar Registro</a></li>
                            <li><i class="fa fa-trash"></i><a href="index.php">Eliminar Registro</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wheelchair"></i>Paciente</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="index.php?page=paciente_odontologia">Nuevo</a></li>
                            <li><i class="fa fa-search"></i><a href="index.php">Buscar</a></li>
                            <li><i class="fa fa-pencil"></i><a href="index.php">Editar</a></li>
                            <li><i class="fa fa-trash"></i><a href="index.php">Eliminar</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-medkit"></i>Diagnostico</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file"></i><a href="index.php?page=Diagnostico">Nuevo</a></li>
                            <li><i class="fa fa-search"></i><a href="index.php">Buscar</a></li>
                            <li><i class="fa fa-pencil"></i><a href="index.php">Editar</a></li>
                            <li><i class="fa fa-trash"></i><a href="index.php">Eliminar</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Varios</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-md"></i>Médico</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user-md"></i><a href="index.php?page=medico">Nuevo Médico</a></li>
                            <li><i class="fa fa-medkit"></i><a href="index.php?page=especialidad_medico">Nueva especialidad</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="index.php?page=clinica"> <i class="menu-icon fa fa-hospital-o"></i>Clinica </a>
                    </li>

                    <h3 class="menu-title">Reporte</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                            aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-print"></i>Reportes</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-print"></i><a href="index.php">Reporte de Dietas</a></li>
                            <li><i class="fa fa-print"></i><a href="index.php">Reporte de Clinica</a></li>
                            <li><i class="fa fa-print"></i><a href="index.php">Reporte de Pacientes</a></li>
                            <li><i class="fa fa-print"></i><a href="index.php">Reporte de Diagnosticos</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

     <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="assets/img/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="index.php"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="index.php"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="index.php"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="index.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            
            <div id="contenido" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'welcome';
                include ('./formularios/'.$page.'.html');
            ?>
            </div>
            
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
</body>
</html>