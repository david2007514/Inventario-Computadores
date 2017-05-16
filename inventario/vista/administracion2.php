<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    header("location: ../index.php?sesionNo=no");
}
include '../modelo/conexion.php';
$query     = "SELECT * FROM nombre_logo";
$resultado = $con->query($query);
$row       = $resultado->fetch_assoc();
$nom       = $row['nombre'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Usuarios </title>
    <?php include 'head.php';?>
  </head>

  <body class="nav-md">


  <?php include "formularios_registros.php";?>
  <?php include "formularios_eliminar.php";?>
  <?php include "formularios_modificar.php";?>

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="administracion.php" class="site_title"><img id="logo" src="data:image/jpg;base64,<?php echo base64_encode($row['logo']); ?>"><span id="esp"></span><span style="margin: auto;"><?php echo $row['nombre']; ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../imagen/user.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?php echo $_SESSION["usuario"]; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Administracion</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="administracion.php">Pagina pricipal</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Registro <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#" data-toggle="modal" data-target="#equipo">Equipo</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#torre">Torre</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#mmonitor">Monitor</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#mmouse">Mouse</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#tteclado">Teclado</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-search-plus"></i> Consultar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                                   <li><a href="#con_equipo" class="info">Equipo</a></li>
                                   <li><a href="#con_torre" class="info">Torre</a></li>
                                   <li><a href="#con_monitor" class="info">Monitor</a></li>
                                   <li><a href="#con_mouse" class="info">Mouse</a></li>
                                   <li><a href="#con_teclado" class="info">Teclado</a></li>
                            </ul>
                        </li>


                    </ul>
                  </li>


                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="#" data-toggle="modal" data-target="#updatePagina" data-placement="top" title="Configuracion">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Pantalla Completa">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Bloquear">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="../modelo/cerrar_sesion.php" data-toggle="tooltip" data-placement="top" title="Cerrar Sesion">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">

                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"><span style="margin-left: 5px"><?php echo $_SESSION["usuario"]; ?></span></i>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Configuracion</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ayuda</a></li>
                    <li><a href="../modelo/cerrar_sesion.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">


              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col" role="main">

<div class="row">

 <div class="conEquipo oculto" id="con_equipo" style="display: none;">

   <div class="col-md-12 col-sm-12 col-xs-12">


     <div class="x_panel">


          <div class="x_title">
              <h2>Equipo</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Configuracion 1</a>
                    </li>
                    <li><a href="#">configuracion 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

                 <section class="linea"></section>

    <div class="x_content">

                <p class="text-muted font-13 m-b-30">Listado de Equipos</p>

                 <a href="../modelo/exportar/reporteequipo.php"><button type="button" class="btn btn-success" title="Exportar a excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="q" placeholder="Busqueda" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
                           <span class="input-group-btn">
                              <button class="btn btn-default" type="button" onclick='load(1);' style="border-radius: 0px 60px 60px 0px;"><span class="glyphicon glyphicon-search" ></span></button>
                          </span>

                       </div>

                    </div>
                <label>Mostrar</label>
                <select name="sele" id="selec" onchange="load(1);" style="margin-top: 10px;">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="todo">Todo</option>

                </select>
                <label>Registros</label>

                   <span id="loader"></span>
                 </form>


                  <div id="resultados"></div><!-- Carga los datos ajax -->
                  <div class='list_equipo'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>



<div class="row">

 <div class="conTorre oculto" id="con_torre" style="display: none;">

   <div class="col-md-12 col-sm-12 col-xs-12">


     <div class="x_panel">


          <div class="x_title">
              <h2>Torre</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Configuracion 1</a>
                    </li>
                    <li><a href="#">configuracion 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

                 <section class="linea"></section>

    <div class="x_content">

                <p class="text-muted font-13 m-b-30">Listado de Torres</p>

                 <a href="../modelo/exportar/reportetorre.php"><button type="button" class="btn btn-success" title="Exportar a excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qt" placeholder="Busqueda" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
                           <span class="input-group-btn">
                              <button class="btn btn-default" type="button" onclick='load(1);' style="border-radius: 0px 60px 60px 0px;"><span class="glyphicon glyphicon-search" ></span></button>
                          </span>

                       </div>

                    </div>
                <label>Mostrar</label>
                <select id="selet" onchange="load(1);" style="margin-top: 10px;">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="todo">Todo</option>

                </select>
                <label>Registros</label>

                   <span id="loader"></span>
                 </form>


                  <div id="resultados"></div><!-- Carga los datos ajax -->
                  <div class='list_torre'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>



<div class="row">

 <div class="conMonitor oculto" id="con_monitor" style="display: none;">

   <div class="col-md-12 col-sm-12 col-xs-12">


     <div class="x_panel">


          <div class="x_title">
              <h2>Monitor</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Configuracion 1</a>
                    </li>
                    <li><a href="#">configuracion 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

                 <section class="linea"></section>

    <div class="x_content">

                <p class="text-muted font-13 m-b-30">Listado de Monitores</p>

                 <a href="../modelo/exportar/reportemonitor.php"><button type="button" class="btn btn-success" title="Exportar a excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qm" placeholder="Busqueda" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
                           <span class="input-group-btn">
                              <button class="btn btn-default" type="button" onclick='load(1);' style="border-radius: 0px 60px 60px 0px;"><span class="glyphicon glyphicon-search" ></span></button>
                          </span>

                       </div>

                    </div>
                <label>Mostrar</label>
                <select id="selem" onchange="load(1);" style="margin-top: 10px;">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="todo">Todo</option>

                </select>
                <label>Registros</label>

                   <span id="loader"></span>
                 </form>


                  <div id="resultados"></div><!-- Carga los datos ajax -->
                  <div class='list_monitor'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>



<div class="row">

 <div class="conMouse oculto" id="con_mouse" style="display: none;">

   <div class="col-md-12 col-sm-12 col-xs-12">


     <div class="x_panel">


          <div class="x_title">
              <h2>Mouse</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Configuracion 1</a>
                    </li>
                    <li><a href="#">configuracion 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

                 <section class="linea"></section>

    <div class="x_content">

                <p class="text-muted font-13 m-b-30">Listado de Mouse</p>

                <a href="../modelo/exportar/reportemouse.php"><button type="button" class="btn btn-success" title="Exportar a excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qmo" placeholder="Busqueda" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
                           <span class="input-group-btn">
                              <button class="btn btn-default" type="button" onclick='load(1);' style="border-radius: 0px 60px 60px 0px;"><span class="glyphicon glyphicon-search" ></span></button>
                          </span>

                       </div>

                    </div>
                <label>Mostrar</label>
                <select id="selemo" onchange="load(1);" style="margin-top: 10px;">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="todo">Todo</option>

                </select>
                <label>Registros</label>

                   <span id="loader"></span>
                 </form>


                  <div id="resultados"></div><!-- Carga los datos ajax -->
                  <div class='list_mouse'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>



<div class="row">

 <div class="conTeclado oculto" id="con_teclado" style="display: none;">

   <div class="col-md-12 col-sm-12 col-xs-12">


     <div class="x_panel">


          <div class="x_title">
              <h2>Teclado</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Configuracion 1</a>
                    </li>
                    <li><a href="#">configuracion 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

                 <section class="linea"></section>

    <div class="x_content">

                <p class="text-muted font-13 m-b-30">Listado de Teclados</p>

                <a href="../modelo/exportar/reporteteclado.php"><button type="button" class="btn btn-success" title="Exportar a excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>


                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qte" placeholder="Busqueda" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
                           <span class="input-group-btn">
                              <button class="btn btn-default" type="button" onclick='load(1);' style="border-radius: 0px 60px 60px 0px;"><span class="glyphicon glyphicon-search" ></span></button>
                          </span>

                       </div>

                    </div>
                <label>Mostrar</label>
                <select id="selete" onchange="load(1);" style="margin-top: 10px;">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="todo">Todo</option>

                </select>
                <label>Registros</label>

                   <span id="loader"></span>
                 </form>


                  <div id="resultados"></div><!-- Carga los datos ajax -->
                  <div class='list_teclado'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>




<div class="row">

 <div class="conUsuarios oculto" id="con_usuarios" style="display: none;">

   <div class="col-md-12 col-sm-12 col-xs-12">


     <div class="x_panel">


          <div class="x_title">
              <h2>Usuario</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Configuracion 1</a>
                    </li>
                    <li><a href="#">configuracion 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

                 <section class="linea"></section>

    <div class="x_content">

                <p class="text-muted font-13 m-b-30">Listado de Usuarios</p>

                <a href="../modelo/exportar/reporteusuarios.php"><button type="button" class="btn btn-success" title="Exportar a excel"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qu" placeholder="Busqueda" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
                           <span class="input-group-btn">
                              <button class="btn btn-default" type="button" onclick='load(1);' style="border-radius: 0px 60px 60px 0px;"><span class="glyphicon glyphicon-search" ></span></button>
                          </span>

                       </div>

                    </div>
                <label>Mostrar</label>
                <select id="seleu" onchange="load(1);" style="margin-top: 10px;">

                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="todo">Todo</option>

                </select>
                <label>Registros</label>

                   <span id="loader"></span>
                 </form>


                  <div id="resultados"></div><!-- Carga los datos ajax -->
                  <div class='list_usuarios'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>

<?php include "estadistica.php";?>
<?php include "instrucciones.php";?>


 </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Autor Geiner Ramírez Jiménez, Sena Derechos reservados &copy;2016
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>



    <!-- jQuery -->
<?php include 'footer.php';?>

  </body>
</html>
