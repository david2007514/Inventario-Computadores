<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Inicio </title>
    <link rel="icon" href="../imagen/logotipo.ico">
    <!-- Bootstrap -->
    <link href="../plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../plugins/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
  <?php include "modal_informacion.php";?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <a href="" data-toggle="modal" data-target="#modalinfo"><i class="fa fa-question-circle pull-right" aria-hidden="true" style="color: blue;"></i></a>
            <form action="../modelo/procesar_inicio_sesion.php" method="POST">
              <h1><img src="../imagen/logo.png"></h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" name="password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-primary" value="Ingresar" style="background: #5eb319;">
                <a href="consultas.php"><input type="button" class="btn btn-primary" name="" value="Consultas" style="background: #5eb319;"></a>
                <a class="reset_pass" href="" onclick="alert('Si olvido su contraseña debe consultar con el administrador del sitio');">Has olvidado tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Es nuevo en el sitio?
                  <a href="" class="to_register" onclick="alert('Para crear una cuenta en el sitio consulte con el administrador del sistema');"> Crear Cuenta </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Sena</h1>
                  <p>Autor Geiner Ramírez Jiménez, Sena Derechos reservados ©2016 </p>
                </div>
              </div>
            </form>
          </section>
          <div class="alert">

           <?php
if (@$_GET['sesionNo'] == 'no') {
    ?>
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <section class="alert alert-danger">
              <h4> Debe iniciar sesion primero </h4>
              </section>
              <?php
}
if (@$_GET['inicio'] == 'N') {
    ?>
             <button type="button" class="close" data-dismiss="alert">&times;</button>
              <section class="alert alert-danger">
              <h4> Usuario o contraseña incorrecta </h4>
              </section>
              <?php
}
if (@$_GET['inicio'] == 'E') {
    ?>
             <button type="button" class="close" data-dismiss="alert">&times;</button>
              <section class="alert alert-danger">
              <h4> Su usuario ha sido inhabilitado </h4>
              <h4> Consulte con el administrador del sitio </h4>
              </section>
              <?php
}
?>
      </div>
    </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Crear cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Correo" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Contraseña" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-primary" value="Crear">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya eres usario registrado?
                  <a href="#signin" class="to_register"> Login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="../imagen/logo.png"> Sena </h1>
                  <p>Autor Geiner Ramírez Jiménez, Sena Derechos reservados ©2016</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
