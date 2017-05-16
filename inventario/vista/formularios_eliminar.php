<form id="eliminarDatosEquipo">
<div class="modal fade" id="datosDeleteEquipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel">Eliminar Equipo:</h4>
      </div>
    <div class="confirmarEquipo">
      <input type="hidden" name="opcion" id="opcion" value="eliminarEquipo">
      <input type="hidden" id="ids" name="ids">
      <input type="hidden" id="id_e" name="id_e">
      <input type="hidden" id="equi" name="equi">
      <input type="hidden" id="mar_equi" name="mar_equi">
      <input type="hidden" id="model" name="model">
      <input type="hidden" id="ubi_equi" name="ubi_equi">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
    <div class="form-group text-center">
            <label class="control-label">Motivo de eliminacion:</label>
            <textarea class="form-control" name="motivo" required="" style="margin-left: 30px; width: 80%;"></textarea>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
      </div>
      <div id="DeleteEquipo"></div>
    </div>
  </div>
</div>
</form>

<form id="eliminarDatosTorre">
<div class="modal fade" id="datosDeleteTorre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel">Eliminar Torre:</h4>
      </div>
    <div class="confirmarTorre">
      <input type="hidden" name="opcion" id="opcion" value="eliminarTorre">
      <input type="hidden" id="ids" name="ids">
      <input type="hidden" id="id_t" name="id_t">
      <input type="hidden" id="ser" name="ser">
      <input type="hidden" id="pla" name="pla">
      <input type="hidden" id="mar_torr" name="mar_torr">
      <input type="hidden" id="mod_torr" name="mod_torr">
      <input type="hidden" id="ubi" name="ubi">
      <input type="hidden" id="mac_e" name="mac_e">
      <input type="hidden" id="mac_w" name="mac_w">
      <input type="hidden" id="moni" name="moni">
      <input type="hidden" id="mous" name="mous">
      <input type="hidden" id="tecl" name="tecl">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
     <div class="form-group text-center">
            <label class="control-label">Motivo de eliminacion:</label>
            <textarea class="form-control" name="motivo" id="motivo" required="" style="margin-left: 30px; width: 80%;"></textarea>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
      </div>
      <div id="DeleteTorre"></div>
    </div>
  </div>
</div>
</form>

<form id="eliminarDatosMonitor">
<div class="modal fade" id="datosDeleteMonitor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel">Eliminar Monitor:</h4>
      </div>
    <div class="confirmarMonitor">
      <input type="hidden" name="opcion" id="opcion" value="eliminarMonitor">
      <input type="hidden" id="ids" name="ids">
      <input type="hidden" id="id_m" name="id_m">
      <input type="hidden" id="seri" name="seri">
      <input type="hidden" id="mar_mon" name="mar_mon">
      <input type="hidden" id="pla_mon" name="pla_mon">
      <input type="hidden" id="ubi_mon" name="ubi_mon">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
     <div class="form-group text-center">
            <label class="control-label">Motivo de eliminacion:</label>
            <textarea class="form-control" name="motivo" required="" style="margin-left: 30px; width: 80%;"></textarea>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
      </div>
      <div id="DeleteMonitor"></div>
    </div>
  </div>
</div>
</form>

<form id="eliminarDatosMouse">
<div class="modal fade" id="datosDeleteMouse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel">Eliminar Mouse:</h4>
      </div>
    <div class="confirmarMouse">
      <input type="hidden" name="opcion" id="opcion" value="eliminarMouse">
      <input type="hidden" id="ids" name="ids">
      <input type="hidden" id="id_mou" name="id_mou">
      <input type="hidden" id="seri_mou" name="seri_mou">
      <input type="hidden" id="mar_mou" name="mar_mou">
      <input type="hidden" id="pla_mou" name="pla_mou">
      <input type="hidden" id="ubi_mou" name="ubi_mou">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
     <div class="form-group text-center">
            <label class="control-label">Motivo de eliminacion:</label>
            <textarea class="form-control" name="motivo" required="" style="margin-left: 30px; width: 80%;"></textarea>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
      </div>
      <div id="DeleteMouse"></div>
    </div>
  </div>
</div>
</form>

<form id="eliminarDatosTeclado">
<div class="modal fade" id="datosDeleteTeclado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel">Eliminar Teclado:</h4>
      </div>
    <div class="confirmarTeclado">
      <input type="hidden" name="opcion" id="opcion" value="eliminarTeclado">
      <input type="hidden" id="ids" name="ids">
      <input type="hidden" id="id_tec" name="id_tec">
      <input type="hidden" id="ser_tec" name="ser_tec">
      <input type="hidden" id="mar_tec" name="mar_tec">
      <input type="hidden" id="pla_tec" name="pla_tec">
      <input type="hidden" id="ubi_tec" name="ubi_tec">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
     <div class="form-group text-center">
            <label class="control-label">Motivo de eliminacion:</label>
            <textarea class="form-control" name="motivo" required="" style="margin-left: 30px; width: 80%;"></textarea>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
      </div>
      <div id="DeleteTeclado"></div>
    </div>
  </div>
</div>
</form>


<form id="eliminarDatosUsuario">
<div class="modal fade" id="datosDeleteUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="exampleModalLabel">Eliminar Usuario:</h4>
      </div>
    <div class="confirmarUsuario">
      <input type="hidden" name="opcion" id="opcion" value="eliminarUsuario">
      <input type="hidden" id="id" name="id">
      <h2 class="text-center text-muted">Estas seguro?</h2>
    <p class="lead text-muted text-center" style="display: block;margin:10px">Esta acción eliminará de forma permanente el registro. Deseas continuar?</p>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-lg btn-primary">Aceptar</button>
      </div>
      </div>
      <div id="DeleteUsuario"></div>
    </div>
  </div>
</div>
</form>
