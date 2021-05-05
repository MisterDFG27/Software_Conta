<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro Cliente Jurídicoo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/collapse.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <!-------------------------------------aCTIVACION LISTA DESPLEGABLE --------------------------------->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/estilo_agregacliente.css">

</head>

<body>


    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="menu.html"><i class="menu-icon fa fa-laptop"></i>Principal </a>
                    </li>
                    <li class="menu-title">REGISTRO</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Agrega Cliente</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Registro_Usuarios.php">Cédula Física</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="Registro_ClienteJuridico.php">Cédula Juridica </a></li>

                        </ul>
                        <!--------------------------------------------------------------------------------------------INFORMACION CLIENTES ----------------------------------------------->
                    <li class="menu-title">INFORMACION </li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Detalle Cliente</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Cliente Activo</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Cliente Inactivo </a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Reactivar Cliente </a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Estado Cliente</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Cliente Moroso </a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Cliente al Día </a></li>
                    </li>
                </ul>



                <!--------------------------------------------------------------------------------------------FACTURACION ----------------------------------------------->
                <li class="menu-title">FACTURACIÓN</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Facturar</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Cobro Mensualidades</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Retiro dinero</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Reintegro dinero</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Consulta Recibos </a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Anular Faturua</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Arqueo de Cajas </a></li>
                </li>
                </ul>
                <!--------------------------------------------------------------------------------------------¨Planilla ----------------------------------------------->

                <li class="menu-title">Planilla</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>RRHH</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Colaboradores</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Resetear Contraseñas </a></li>
                </li>
                </ul>

                <!--------------------------------------------------------------------------------------------Administracion----------------------------------------------->
                <!-----orIGIBAL-->
                <li class="menu-title">Administracion</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Administrar</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="Agrega_Colaborador.php">Colaboradores</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Resetear Contraseñas </a></li>
                </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo1.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo1.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="cerrar-sesion.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!---------------------------------------------------------------- INICIO      COLLAPSE --------------------------------------------------->


        <body>

            <h2>Datos clientes cedula Juridica</h2>


            <div class="container register-form">
                <div class="form">
                    <form action="save.php" method="POST">


                        <!------------------------------------------------------------------- INICIO DIRECCION FISICA COLLAPSE-------------------------------------->
                        <h2>Datos clientes cedula física</h2>

                        <!---- <div class="">----->
                        <div class="container register-form">
                            <div class="form">
                                <form action="save.php" method="POST">
                                    <button type="button" class="collapsible">INFORMACION EMPRESARIAL</button>
                                    <div class="content">
                                        <div class="form-content">
                                            <div class="row">
                                                <!-------------------------------- Registro Persona Fisica-------------------------- -->

                                                <div class="col-md-6">

                                                    <!----------------------------------------------------->
                                                    <div class="form-group">
                                                        <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                                            <option value="0">Tipo de identificacion</option>
                                                            <option value="1">Física</option>
                                                            <option value="2">Juridica</option>
                                                        </select>
                                                    </div>
                                                    <!----------------------------------------------------->

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Cédula Juridica*" value="" />
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Nombre de Empresa*" value="" />
                                                    </div>


                                                    <div class="form-group">

                                                        <label for="start">Fecha de Creación:</label>

                                                        <input type="date" id="fecha" name="fecha" value="<?php echo date("Y-MM-D"); ?>" min="1400-01-01" max="300-12-31">
                                                    </div>

                                                </div>

                                                <!--------------------------------Culumna Derecha-------------------------- -->

                                                <div class="col-md-6">




                                                    <!----------------------------------------------------->
                                                    <div class="form-group">
                                                        <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                                            <option value="0">Regímen Tributario</option>
                                                            <option value="1">Tradicional</option>
                                                            <option value="2">Simplificado</option>
                                                            <option value="3">Especial Agropecuario</option>
                                                            <option value="4">Rentas de capital inmobiliario</option>

                                                        </select>
                                                    </div>
                                                    <!----------------------------------------------------->
                                                    <!----------------------------------------------------->
                                                    <div class="form-group">
                                                        <select name="selectSm" id="selectSm" class="form-control-sm form-control">
                                                            <option value="0">Actividad Económica</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <!----------------------------------------------------->

                                                </div>


                                            </div>
                                            <!----------------------------------------Fin row content ---->
                                            <div class="row">
                                                <!-------------------------------- Registro Persona Fisica-------------------------- -->

                                                <div class="col-md-6">

                                                    <!----------------------------------------------------->

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!--------------------------------INICIO INFORMACION DE CONTACTO EMPRESARIAL COLLAPSE-------------------------- -->

                                    <button type="button" class="collapsible">INFORMACION DE CONTACTO EMPRESARIAL</button>
                                    <div class="content">

                                        <div class="form-content">

                                            <div class="row">


                                                <div class="col-md-6">



                                                    <div class="form-group">
                                                        <input type="text" name="tel" class="form-control" placeholder="Teléfono Principal*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="ext1" class="form-control" placeholder="Ext 1*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="ext2" class="form-control" placeholder="Ext 2*" value="" />
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" name="telad" class="form-control" placeholder="Teléfono Opcional *" value="" />
                                                    </div>




                                                </div>

                                                <!--------------------------------Culumna Derecha-------------------------- -->

                                                <div class="col-md-6">


                                                    <div class="form-group">
                                                        <input type="text" name="cel" class="form-control" placeholder="Celular Principal*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="celop" class="form-control" placeholder="Celular Opcional*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="correop" class="form-control" placeholder="Correo Personal *" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="correofac" class="form-control" placeholder="Correo Facturacion Electrónica *" value="" />
                                                    </div>

                                                    <div class="form-group">
                                                        <p>Fecha de Contratacion *</p>
                                                        <input type="date" name="fechacontra" class="form-control" placeholder="Fecha de contratacion *" value="" />
                                                    </div>

                                                </div>

                                            </div>




                                        </div>



                                    </div>
                                    <button type="button" class="collapsible">DIRECCION FISICA</button>
                                    <div class="content">

                                        <div class="form-content">

                                            <div class="row">


                                                <div class="col-md-6">



                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Provincia*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Cantón*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Distrito*" value="" />
                                                    </div>

                                                </div>

                                                <!--------------------------------Culumna Derecha-------------------------- -->

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Barrio*" value="" />
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Otras Señas *" value="" />
                                                    </div>

                                                </div>

                                            </div>


                                            <link rel="stylesheet" href="estilo_agregacliente.css">


                                        </div>

                                    </div>
                                    <button type="button" class="collapsible">CORREOS Y CONTRASEÑAS</button>
                                    <div class="content">

                                        <div class="form-content">

                                            <div class="row">


                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" Correo Principal" value="" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" Correo Facturacion" value="" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="TRAVI " value="" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ATV" value="" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="CCSS VIRTUAL" value="" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="INS " value="" disabled />
                                                    </div>

                                                </div>

                                                <!--------------------------------Culumna Derecha-------------------------- -->

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="clavecorre" class="form-control" placeholder=" Clave Correo Principal*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="clavefac" class="form-control" placeholder=" Clave Correo Facturacion*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="clavetravi" class="form-control" placeholder="Clave TRAVI *" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="claveatv" class="form-control" placeholder="Clave ATV *" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="claveccss" class="form-control" placeholder="Clave CCSS VIRTUAL*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="claveins" class="form-control" placeholder="Clave INS *" value="" />
                                                    </div>

                                                </div>

                                            </div>



                                        </div>


                                    </div>


                                    <button type="button" class="collapsible">CLASIFICACION DE TIPO CLIENTE</button>
                                    <div class="content">

                                        <div class="form-content">

                                            <div class="row">


                                                <div class="col-md-6">


                                                    <div class="form-group">
                                                        <input type="text" name="provinctc" class="form-control" placeholder="Provincia*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="cantonctc" class="form-control" placeholder="Cantón*" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="distritoctc" class="form-control" placeholder="Distrito*" value="" />
                                                    </div>


                                                </div>

                                                <!--------------------------------Culumna Derecha-------------------------- -->

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <input type="text" name="barrioctc" class="form-control" placeholder="Barrio*" value="" />
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" name="señasctc" class="form-control" placeholder="Otras Señas *" value="" />
                                                    </div>

                                                </div>

                                            </div>



                                        </div>


                                    </div>

                                    <button type="submit" name="save" class="btn btn-success btn-block">GUARDAR</button>
                                </form>
                                <script>
                                    var coll = document.getElementsByClassName("collapsible");
                                    var i;

                                    for (i = 0; i < coll.length; i++) {
                                        coll[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var content = this.nextElementSibling;
                                            if (content.style.display === "block") {
                                                content.style.display = "none";
                                            } else {
                                                content.style.display = "block";
                                            }
                                        });
                                    }
                                </script>
                                <br>

                            </div>
                        </div>




        </body>

        <!--------------------------------------------------------FIN  COLLAPSE------------------------------------------------------->


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->

</body>

</html>