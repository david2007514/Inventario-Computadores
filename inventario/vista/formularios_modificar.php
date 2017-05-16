<form id="actualizarDatosEquipo">
<div class="modal fade" id="datosUpdateEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Equipo:</h4>
      </div>
      <div class="modal-body">
      <div id="actualizar_datos_equipo"></div>
      <input type="hidden" name="opcion" id="opcion" value="modificarEquipo">
      <input type="hidden" class="form-control" id="ids" name="ids">
      <?php
if (isset($_SESSION["admin"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
        <?php
} else if (isset($_SESSION["usuario"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id" readonly="">
          </div>
        <?php
}
?>

      <div class="form-group">
            <label class="control-label">Equipo:</label>
            <input type="text" class="form-control" id="equipo" name="equipo">
          </div>
      <div class="form-group">
            <label class="control-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
          </div>
      <div class="form-group">
            <label class="control-label">Modelo:</label>
            <input type="text" class="form-control" id="modelo" name="modelo">
          </div>
      <div class="form-group">
            <label for="continente" class="control-label">Ubicacion:</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
          </div>

        <div class="form-group">
          <label for="estado" class="control-label">Estado:</label>
          <select name="estado" id="estado" class="form-control" >
            <option value="disponible">Disponible</option>
            <option value="en formacion">En formación</option>
            <option value="baja">Baja</option>
            <option value="" selected disabled>Nuevo estado</option> 
           </select>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
        <button type="reset" class="btn btn-default">Limpiar Campos</button>
      </div>
    </div>
  </div>
</div>
</form>

<form id="actualizarDatosTorre" class="form-horizontal">
<div class="modal fade" id="datosUpdateTorre" tabindex="-1" role="dialog" aria-labelledby="modalTorre">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalTorre">Modificar Torre</h4>
      </div>
      <div class="modal-body">
     <div id="actualizar_datos_torre"></div>
      <input type="hidden" name="opcion" id="opcion" value="modificarTorre">
      <input type="hidden" class="form-control" id="ids" name="ids">

      <?php
if (isset($_SESSION["admin"])) {
    ?>
      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id:</label>
          <div class="col-xs-10">
              <input id="id" name="id" type="text" class="form-control" placeholder="Id" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>
      <?php
} else if (isset($_SESSION["usuario"])) {
    ?>
      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id:</label>
          <div class="col-xs-10">
              <input id="id" name="id" type="text" class="form-control" placeholder="Id" aria-describedby="inputSuccess2Status" required="" readonly="">

          </div>
      </div>
      <?php
}
?>


      <div class="form-group">
          <label for="serial" class="control-label col-xs-2">Serial:</label>
          <div class="col-xs-10">
              <input id="serial" name="serial" type="text" class="form-control" placeholder="Serial" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="placa_sena" class="control-label col-xs-2">Placa Sena:</label>
          <div class="col-xs-10">
              <input id="placa" name="placa" type="text" class="form-control" placeholder="Placa Sena" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="marca" class="control-label col-xs-2">Marca:</label>
          <div class="col-xs-10">
              <input id="marca" name="marca" type="text" class="form-control" placeholder="Marca" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Modelo:</label>
          <div class="col-xs-10">
              <input id="modelo" name="modelo" type="text" class="form-control" placeholder="Modelo" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="ubicacion" class="control-label col-xs-2">Ubicación:</label>
          <div class="col-xs-10">
              <input id="ubicacion" name="ubicacion" type="text" class="form-control" placeholder="Ubicacion" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="mac_ethernet" class="control-label col-xs-2">Mac Ethernet:</label>
          <div class="col-xs-10">
              <input id="ma" name="ma" type="text" class="form-control" placeholder="Mac Ethernet"  aria-describedby="inputSuccess2Status">

          </div>
      </div>


      <div class="form-group">
          <label for="mac_wlan" class="control-label col-xs-2">Mac Wlan:</label>
          <div class="col-xs-10">
              <input id="mac" name="mac" type="text" class="form-control" placeholder="Mac Wlan"  aria-describedby="inputSuccess2Status">

          </div>
      </div>


      <div class="form-group">
          <label for="torre_monitor" class="control-label col-xs-2">Monitor:</label>
          <div class="col-xs-10">
              <input id="mon" name="mon" type="text" class="form-control" placeholder="Monitor" onkeyup="validacion_asociacion('mon');" aria-describedby="inputSuccess2Status">
                <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="torre_mouse" class="control-label col-xs-2">Mouse:</label>
          <div class="col-xs-10">
              <input id="mou" name="mou" type="text" class="form-control" placeholder="Mouse" onkeyup="validacion_asociacion('mou');" aria-describedby="inputSuccess2Status">
                <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="torre_teclado" class="control-label col-xs-2">Teclado:</label>
          <div class="col-xs-10">
              <input id="tec" name="tec" type="text" class="form-control" placeholder="Teclado" onkeyup="validacion_asociacion('tec');" aria-describedby="inputSuccess2Status">
                <span class="help-block"></span>
          </div>
      </div>


       <div class="form-group">
          <label for="torre_teclado" class="control-label col-xs-2">Teclado:</label>
          <div class="col-xs-10">
              <select id="est" name="estado" type="text" class="form-control" placeholder="Estado"  aria-describedby="inputSuccess2Status">
              <option value="Disponible">Disponible</option>
                <option value="En Formacion">En Formacion</option>
                <option value="Baja">Baja</option>
                <option value="" selected disabled>Nuevo estado</option>
               
              </select>
                <span class="help-block"></span>
          </div>
      </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>


<form id="actualizarDatosMonitor">
<div class="modal fade" id="datosUpdateMonitor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Monitor:</h4>
      </div>
      <div class="modal-body">
      <div id="actualizar_datos_monitor"></div>
      <input type="hidden" name="opcion" id="opcion" value="modificarMonitor">
      <input type="hidden" class="form-control" id="ids" name="ids">


      <?php
if (isset($_SESSION["admin"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
        <?php
} else if (isset($_SESSION["usuario"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id" readonly="">
          </div>
        <?php
}
?>
      <div class="form-group">
            <label class="control-label">Serial:</label>
            <input type="text" class="form-control" id="serial" name="serial" required="">
          </div>
      <div class="form-group">
            <label class="control-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
          </div>
      <div class="form-group">
            <label class="control-label">Placa Sena:</label>
            <input type="text" class="form-control" id="placa" name="placa" required="">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Ubicacion:</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
          </div>

        <div class="form-group">
          <label for="estado" class="control-label">Estado:</label>
          <select name="estado" id="estado" class="form-control" >
            <option value="disponible">Disponible</option>
            <option value="en formacion">En formación</option>
            <option value="baja">Baja</option>
            <option value="" selected disabled>Nuevo estado</option> 
           </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
        <button type="reset" class="btn btn-default">Limpiar Campos</button>
      </div>
    </div>
  </div>
</div>
</form>

<form id="actualizarDatosMouse">
<div class="modal fade" id="datosUpdateMouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Mouse:</h4>
      </div>
      <div class="modal-body">
      <div id="actualizar_datos_mouse"></div>
      <input type="hidden" name="opcion" id="opcion" value="modificarMouse">
      <input type="hidden" class="form-control" id="ids" name="ids">

      <?php
if (isset($_SESSION["admin"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
        <?php
} else if (isset($_SESSION["usuario"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id" readonly="">
          </div>
        <?php
}
?>
      <div class="form-group">
            <label class="control-label">Serial:</label>
            <input type="text" class="form-control" id="serial" name="serial" required="">
          </div>
      <div class="form-group">
            <label class="control-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
          </div>
      <div class="form-group">
            <label class="control-label">Placa Sena:</label>
            <input type="text" class="form-control" id="placa" name="placa" required="">
          </div>
         <div class="form-group">
            <label for="continente" class="control-label">Ubicacion:</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
          </div>

        <div class="form-group">
          <label for="estado" class="control-label">Estado:</label>
          <select name="estado" id="estado" class="form-control" >
            <option value="disponible">Disponible</option>
            <option value="en formacion">En formación</option>
            <option value="baja">Baja</option>
            <option value="" selected disabled>Nuevo estado</option> 
           </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
        <button type="reset" class="btn btn-default">Limpiar Campos</button>
      </div>
    </div>
  </div>
</div>
</form>

<form id="actualizarDatosTeclado">
<div class="modal fade" id="datosUpdateTeclado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Teclado:</h4>
      </div>
      <div class="modal-body">
      <div id="actualizar_datos_teclado"></div>
      <input type="hidden" name="opcion" id="opcion" value="modificarTeclado">
      <input type="hidden" class="form-control" id="ids" name="ids">

      <?php
if (isset($_SESSION["admin"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id">
          </div>
        <?php
} else if (isset($_SESSION["usuario"])) {
    ?>
        <div class="form-group">
            <label class="control-label">Id:</label>
            <input type="text" class="form-control" id="id" name="id" readonly="">
          </div>
        <?php
}
?>
      <div class="form-group">
            <label class="control-label">Serial:</label>
            <input type="text" class="form-control" id="serial" name="serial" required="">
          </div>
      <div class="form-group">
            <label class="control-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca">
          </div>
      <div class="form-group">
            <label class="control-label">Placa Sena:</label>
            <input type="text" class="form-control" id="placa" name="placa" required="">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Ubicacion:</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion">
          </div>

        <div class="form-group">
          <label for="estado" class="control-label">Estado:</label>
          <select name="estado" id="estado" class="form-control" >
            <option value="disponible">Disponible</option>
            <option value="en formacion">En formación</option>
            <option value="baja">Baja</option>
            <option value="" selected disabled>Nuevo estado</option> 
          </select>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
        <button type="reset" class="btn btn-default">Limpiar Campos</button>
      </div>
    </div>
  </div>
</div>
</form>



<form id="actualizarDatosUsuario">
<div class="modal fade" id="datosUpdateUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificando Usuario:</h4>
      </div>
      <div class="modal-body">
      <div id="actualizar_datos_usuario"></div>
      <input type="hidden" name="opcion" id="opcion" value="modificarUsuario">
      <input type="hidden" class="form-control" id="ids" name="ids">


        <div class="form-group">
            <label class="control-label">Identificacion:</label>
            <input type="number" class="form-control" id="id" name="id" required="" disabled="">
          </div>

        <div class="form-group">
            <label class="control-label">Primer Nombre:</label>
            <input type="text" class="form-control" id="pnom" name="pnom" required="">
          </div>

      <div class="form-group">
            <label class="control-label">Segundo Nombre:</label>
            <input type="text" class="form-control" id="snom" name="snom">
          </div>
      <div class="form-group">
            <label class="control-label">Primer Apellido:</label>
            <input type="text" class="form-control" id="piape" name="piape" required="">
          </div>
      <div class="form-group">
            <label class="control-label">Segundo Apellido:</label>
            <input type="text" class="form-control" id="seape" name="seape">
          </div>
          <div class="form-group">
            <label for="continente" class="control-label">Cargo:</label>

               <select class="form-control" name="cargoo" id="cargoo" required>
               </select>

          </div>
          <div class="form-group">
            <label class="control-label">Correo:</label>
            <input type="email" class="form-control" id="correo" name="correo" required="">
          </div>
          <div class="form-group">
            <label class="control-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required="" readonly="">
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required="">
          </div>
          <div class="form-group">
            <label class="control-label">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="repassword" name="repassword" required="">
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
        <button type="reset" class="btn btn-default">Limpiar Campos</button>
      </div>
    </div>
  </div>
</div>
</form>



<form accept-charset="utf-8" method="POST" id="enviarimagenes" enctype="multipart/form-data">
<div class="modal fade" id="updatePagina" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Modificar Pagina:</h4>
      </div>
      <div class="modal-body">
          <div class="form-group">
      <input type="hidden" class="form-control" id="id" name="id">
          </div>
      <div class="form-group">
            <label class="control-label">Nuevo Nombre:</label>
            <input type="text" name="nombreP" class="form-control" required="" />
          </div>
      <div class="form-group">
            <label class="control-label">Logo:</label>
            <input type="file" name="imagen" class="form-control" required="" />
          </div>

      </div>
      <div class="modal-footer">
      <div id="mensaje"></div>
        <button type="button" class="btn btn-default" id="dismis" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
        <button type="reset" class="btn btn-default">Limpiar Campos</button>
      </div>
    </div>
  </div>
</div>
</form>
