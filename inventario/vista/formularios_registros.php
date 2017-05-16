<form id="guardarEquipo" class="form-horizontal">
<div class="modal fade" id="equipo" tabindex="-1" role="dialog" aria-labelledby="modalEquipo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalEquipo">Registrar Equipo</h4>
      </div>
      <div class="modal-body">

      <div id="mensaje_equipo"></div>
      <input type="hidden" name="opcion" id="opcion" value="registrarEquipo">
      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id Equipo:</label>
          <div class="col-xs-10">
              <input id="id_equipo" name="id_equipo" type="text" class="form-control" placeholder="Id" onkeyup="validacion_equipo('id_equipo');" aria-describedby="inputSuccess2Status">
              <span class="help-block"></span>
          </div>
      </div>

      <div class="form-group">
          <label for="equipo" class="control-label col-xs-2">Equipo:</label>
          <div class="col-xs-10">
              <input id="equipo" name="equipo" type="text" class="form-control" placeholder="Equipo" aria-describedby="inputSuccess2Status" required="">

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
          <label for="modelo" class="control-label col-xs-2">Estado:</label>
          <div class="col-xs-10">
              <select id="estado" name="estado" type="text" class="form-control" placeholder="Estado"  aria-describedby="inputSuccess2Status">
                <option value="Disponible">Disponible</option>
                <option value="En Formacion">En Formacion</option>
                <option value="Baja">Baja</option>
               <option value="" selected disabled>Estado</option>
              </select>
            
              <span class="help-block"></span>
          </div>
  </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>


<form id="guardarTorre" class="form-horizontal">
<div class="modal fade" id="torre" tabindex="-1" role="dialog" aria-labelledby="modalTorre">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalTorre">Registrar Torre</h4>
      </div>
      <div class="modal-body">
      <div id="mensaje_torre"></div>

      <input type="hidden" name="opcion" id="opcion" value="registrarTorre">

      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id Torre:</label>
          <div class="col-xs-10">
              <input id="id_torre" name="id_torre" type="text" class="form-control" placeholder="Id" onkeyup="validacion_torre('id_torre');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>

      <div class="form-group">
          <label for="serial" class="control-label col-xs-2">Serial:</label>
          <div class="col-xs-10">
              <input id="serial_torre" name="serial_torre" type="text" class="form-control" placeholder="Serial" onkeyup="validacion_torre('serial_torre');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="placa_sena" class="control-label col-xs-2">Placa Sena:</label>
          <div class="col-xs-10">
              <input id="placa_sena" name="placa_sena" type="text" class="form-control" placeholder="Placa Sena" onkeyup="validacion_torre('placa_sena');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
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
              <input id="mac_ethernet" name="mac_ethernet" type="text" class="form-control" placeholder="Mac Ethernet"  aria-describedby="inputSuccess2Status">

          </div>
      </div>


      <div class="form-group">
          <label for="mac_wlan" class="control-label col-xs-2">Mac Wlan:</label>
          <div class="col-xs-10">
              <input id="mac_wlan" name="mac_wlan" type="text" class="form-control" placeholder="Mac Wlan"  aria-describedby="inputSuccess2Status">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Monitor:</label>
          <div class="col-xs-10">
              <input id="monitor" name="monitor" type="text" class="form-control" placeholder="Monitor" onkeyup="validacion_torre('monitor');" aria-describedby="inputSuccess2Status">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Mouse:</label>
          <div class="col-xs-10">
              <input id="mouse" name="mouse" type="text" class="form-control" placeholder="Mouse" onkeyup="validacion_torre('mouse');" aria-describedby="inputSuccess2Status">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Teclado:</label>
          <div class="col-xs-10">
              <input id="teclado" name="teclado" type="text" class="form-control" placeholder="Teclado" onkeyup="validacion_torre('teclado');" aria-describedby="inputSuccess2Status">
              <span class="help-block"></span>
          </div>
      </div>


       <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Estado:</label>
          <div class="col-xs-10">
              <select id="estado" name="estado" type="text" class="form-control" placeholder="Estado"  aria-describedby="inputSuccess2Status">
                <option value="Disponible">Disponible</option>
                <option value="En Formacion">En Formacion</option>
                <option value="Baja">Baja</option>
               <option value="" selected disabled>Estado</option>
              </select>
            
              <span class="help-block"></span>
          </div>
      </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>



<form id="guardarMonitor" class="form-horizontal">
<div class="modal fade" id="mmonitor" tabindex="-1" role="dialog" aria-labelledby="modalMonitor">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalMonitor">Registrar Monitor</h4>
      </div>
      <div class="modal-body">
            <div id="mensaje_monitor"></div>
      <input type="hidden" name="opcion" id="opcion" value="registrarMonitor">

      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id Monitor:</label>
          <div class="col-xs-10">
              <input id="id_monitor" name="id_monitor" type="text" class="form-control" placeholder="Id" onkeyup="validacion_monitor('id_monitor');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>

      <div class="form-group">
          <label for="serial_monitor" class="control-label col-xs-2">Serial:</label>
          <div class="col-xs-10">
              <input id="serial_monitor" name="serial_monitor" type="text" class="form-control" placeholder="Serial" onkeyup="validacion_monitor('serial_monitor');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="marca" class="control-label col-xs-2">Marca:</label>
          <div class="col-xs-10">
              <input id="marca_monitor" name="marca_monitor" type="text" class="form-control" placeholder="Marca" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="placa" class="control-label col-xs-2">Placa Sena:</label>
          <div class="col-xs-10">
              <input id="placa_sena_monitor" name="placa_sena_monitor" type="text" class="form-control" placeholder="Placa Sena" onkeyup="validacion_monitor('placa_sena_monitor');" aria-describedby="inputSuccess2Status" required="">
             <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="ubicacion" class="control-label col-xs-2">Ubicación:</label>
          <div class="col-xs-10">
              <input id="ubicacion" name="ubicacion" type="text" class="form-control" placeholder="Ubicacion" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>

      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Estado:</label>
          <div class="col-xs-10">
              <select id="estado" name="estado" type="text" class="form-control" placeholder="Estado"  aria-describedby="inputSuccess2Status">
                <option value="Disponible">Disponible</option>
                <option value="En Formacion">En Formacion</option>
                <option value="Baja">Baja</option>
               <option value="" selected disabled>Estado</option>
              </select>
            
              <span class="help-block"></span>
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary" onclick="verificar_monitor()">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>



<form id="guardarMouse" class="form-horizontal">
<div class="modal fade" id="mmouse" tabindex="-1" role="dialog" aria-labelledby="modalMouse">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalMouse">Registrar Mouse</h4>
      </div>
      <div class="modal-body">
      <div id="mensaje_mouse"></div>
      <input type="hidden" name="opcion" id="opcion" value="registrarMouse">

      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id Mouse:</label>
          <div class="col-xs-10">
              <input id="id_mouse" name="id_mouse" type="text" class="form-control" placeholder="Id" onkeyup="validacion_mouse('id_mouse');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>

      <div class="form-group">
          <label for="serial_mouse" class="control-label col-xs-2">Serial:</label>
          <div class="col-xs-10">
              <input id="serial_mouse" name="serial_mouse" type="text" class="form-control" placeholder="Serial" onkeyup="validacion_mouse('serial_mouse');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="marca" class="control-label col-xs-2">Marca:</label>
          <div class="col-xs-10">
              <input id="marca_mouse" name="marca_mouse" type="text" class="form-control" placeholder="Marca"   aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="placa" class="control-label col-xs-2">Placa Sena:</label>
          <div class="col-xs-10">
              <input id="placa_sena_mouse" name="placa_sena_mouse" type="text" class="form-control" placeholder="Placa Sena" onkeyup="validacion_mouse('placa_sena_mouse');" aria-describedby="inputSuccess2Status" required="">
             <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="ubicacion" class="control-label col-xs-2">Ubicación:</label>
          <div class="col-xs-10">
              <input id="ubicacion" name="ubicacion" type="text" class="form-control" placeholder="Ubicacion" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>

      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Estado:</label>
          <div class="col-xs-10">
              <select id="estado" name="estado" type="text" class="form-control" placeholder="Estado"  aria-describedby="inputSuccess2Status">
                <option value="Disponible">Disponible</option>
                <option value="En Formacion">En Formacion</option>
                <option value="Baja">Baja</option>
               <option value="" selected disabled>Estado</option>
              </select>
            
              <span class="help-block"></span>
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary" onclick="verificar_mouse()">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>



<form id="guardarTeclado" class="form-horizontal">
<div class="modal fade" id="tteclado" tabindex="-1" role="dialog" aria-labelledby="modalTeclado">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalTeclado">Registrar Teclado</h4>
      </div>
      <div class="modal-body">

      <div id="mensaje_teclado"></div>
      <input type="hidden" name="opcion" id="opcion" value="registrarTeclado">

      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Id Teclado:</label>
          <div class="col-xs-10">
              <input id="id_teclado" name="id_teclado" type="text" class="form-control" placeholder="Id" onkeyup="validacion_teclado('id_teclado');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>

      <div class="form-group">
          <label for="serial" class="control-label col-xs-2">Serial:</label>
          <div class="col-xs-10">
              <input id="serial_teclado" name="serial_teclado" type="text" class="form-control" placeholder="Serial" onkeyup="validacion_teclado('serial_teclado');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="marca" class="control-label col-xs-2">Marca:</label>
          <div class="col-xs-10">
              <input id="marca_teclado" name="marca_teclado" type="text" class="form-control" placeholder="Marca" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="placa" class="control-label col-xs-2">Placa Sena:</label>
          <div class="col-xs-10">
              <input id="placa_sena_teclado" name="placa_sena_teclado" type="text" class="form-control" placeholder="Placa Sena" onkeyup="validacion_teclado('placa_sena_teclado');" aria-describedby="inputSuccess2Status" required="">
             <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="ubicacion" class="control-label col-xs-2">Ubicación:</label>
          <div class="col-xs-10">
              <input id="ubicacion" name="ubicacion" type="text" class="form-control" placeholder="Ubicacion" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>

      <div class="form-group">
          <label for="modelo" class="control-label col-xs-2">Estado:</label>
          <div class="col-xs-10">
              <select id="estado" name="estado" type="text" class="form-control" placeholder="Estado"  aria-describedby="inputSuccess2Status">
                <option value="Disponible">Disponible</option>
                <option value="En Formacion">En Formacion</option>
                <option value="Baja">Baja</option>
                <option value="" selected disabled>Estado</option>
              </select>
            
              <span class="help-block"></span>
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary" onclick="verificar_teclado()">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>


<form id="guardarUsuario" class="form-horizontal">
<div class="modal fade" id="usuarios" tabindex="-1" role="dialog" aria-labelledby="modalUsuario">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalUsuario">Registrar Usuario</h4>
      </div>
      <div class="modal-body">

      <div id="mensaje_usuario"></div>
      <input type="hidden" name="opcion" id="opcion" value="registrarUsuario">

      <div class="form-group">
          <label for="id" class="control-label col-xs-2">Identificación:</label>
          <div class="col-xs-10">
              <input id="identificacion" name="identificacion" type="number" class="form-control" placeholder="Identificación" onkeyup="validacion_usuario('identificacion');" aria-describedby="inputSuccess2Status" required="">
              <span class="help-block"></span>
          </div>
      </div>

      <div class="form-group">
          <label for="nombre1" class="control-label col-xs-2">Primer Nombre:</label>
          <div class="col-xs-10">
              <input id="primer_nombre" name="primer_nombre" type="text" class="form-control" placeholder="Primer Nombre" aria-describedby="inputSuccess2Status" required="">
          </div>
      </div>


      <div class="form-group">
          <label for="nombre2" class="control-label col-xs-2">Segundo Nombre:</label>
          <div class="col-xs-10">
              <input id="segundo_nombre" name="segundo_nombre" type="text" class="form-control" placeholder="Segundo Nombre" aria-describedby="inputSuccess2Status">

          </div>
      </div>


      <div class="form-group">
          <label for="apellido1" class="control-label col-xs-2">Primer Apellido:</label>
          <div class="col-xs-10">
              <input id="primer_apellido" name="primer_apellido" type="text" class="form-control" placeholder="Primer Apellido" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="apellido2" class="control-label col-xs-2">Segundo Apellido:</label>
          <div class="col-xs-10">
              <input id="segundo_apellido" name="segundo_apellido" type="text" class="form-control" placeholder="Segundo Apellido" aria-describedby="inputSuccess2Status">
              <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
              <label for="cargo" class="control-label col-xs-2">Cargo:</label>
            <div class="col-xs-10">
               <select class="form-control" name="cargo" id="cargo" required>
               </select>
            </div>
      </div>


      <div class="form-group">
          <label for="correo" class="control-label col-xs-2">Correo:</label>
          <div class="col-xs-10">
              <input id="correo" name="correo" type="email" class="form-control" placeholder="Correo" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="usuario" class="control-label col-xs-2">Usuario:</label>
          <div class="col-xs-10">
              <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Usuario" onkeyup="validacion_usuario('usuario');" aria-describedby="inputSuccess2Status" required="">
             <span class="help-block"></span>
          </div>
      </div>


      <div class="form-group">
          <label for="password" class="control-label col-xs-2">Contraseña:</label>
          <div class="col-xs-10">
              <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>


      <div class="form-group">
          <label for="repassword" class="control-label col-xs-2">Confirmar Contraseña:</label>
          <div class="col-xs-10">
              <input id="repassword" name="repassword" type="password" class="form-control" placeholder="Confirmar Contraseña" aria-describedby="inputSuccess2Status" required="">

          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-primary">Limpiar campos</button>
        <button type="submit" class="btn btn-primary" onclick="verificar_usuario()">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>
