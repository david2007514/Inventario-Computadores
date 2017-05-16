<?php
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
    <title> Administracion </title>
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
                <h2>Consultor</h2>
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
                      <li><a href="consultas.php">Pagina pricipal</a></li>
                      <li><a href="login.php">Login</a></li>
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
                    <i class="fa fa-user"><span style="margin-left: 5px">Consultas</span></i>

                  </a>

                </li>

                <li role="presentation" class="dropdown">


              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->

        <!-- page content -->
<div class="right_col" role="main">

<div class="oculto" style="display: block; color: black;">
<?php include "estadistica.php";?>
  <h1 class="text-center">Instrucciones</h1>
  <h3>Consultas</h3>
  <p>
   Clic en menú de consultas:
   <br>
   <br>
   <img src="../imagen/Consulta2.PNG" style="width: 40%; height: 200px;">
   <br>
   <br>
   A continuación se desplegara un menú con los ítems a consultar; hacer clic en el que desee consultar:
   <br>
   <br>
   <img src="../imagen/Consulta3.PNG" style="width: 40%; height: 200px;">
   <br>
   <br>
  Luego saldrá la siguiente información y si desea realizar una búsqueda el especifico deberá ingresar en el cuadro de búsqueda el id, serial o placa Sena del correspondiente.
  <br>
  <br>
  <img src="../imagen/Consulta4.PNG" style="width: 40%; height: 200px;">
   <br>
   <br>
  </p>
  <h3>Ingreso</h3>
  <p>
   Para ingresar al aplicativo, clic en el menú inicio (<i class="fa fa-home"></i> Inicio): login;
Regresará a la página principal y deberá ingresar su usuario y contraseña Asignado por el administrador del sistema.

<br>
<br>
<img src="../imagen/Menu_inicio.PNG" style="width: 40%; height: 200px;">

  </p>
</div>

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

                <p class="text-muted font-13 m-b-30">Busqueda de Equipos</p>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                       <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="q" placeholder="Buscar equipos" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
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
                  <div class='list_equipoo'></div><!-- Carga los datos ajax -->

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

                <p class="text-muted font-13 m-b-30">Busqueda de Torres</p>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qt" placeholder="Buscar torres" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
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
                  <div class='list_torree'></div><!-- Carga los datos ajax -->

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

                <p class="text-muted font-13 m-b-30">Busqueda de Monitores</p>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qm" placeholder="Buscar monitores" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
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
                  <div class='list_monitorr'></div><!-- Carga los datos ajax -->

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

                <p class="text-muted font-13 m-b-30">Busqueda de Mouse</p>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qmo" placeholder="Buscar mouse" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
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
                  <div class='list_mousee'></div><!-- Carga los datos ajax -->

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

                <p class="text-muted font-13 m-b-30">Busqueda de Teclados</p>

                  <form class="form-horizontal" role="form" id="datos_cotizacion">


                     <div class="title_right">
                        <div class="input-group pull-right" style="width: 30%;">
                          <input type="text" class="form-control" id="qte" placeholder="Buscar teclados" onkeyup='load(1);' style="border-radius: 60px 0px 0px 60px;">
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
                  <div class='list_tecladoo'></div><!-- Carga los datos ajax -->

        </div>
      </div>
    </div>
  </div>
</div>



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
