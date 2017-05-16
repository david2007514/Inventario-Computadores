<?php

# conectare la base de datos
include 'conexion.php';

session_start();

$fecha  = date("Y/m/d H:i:s");
$user   = $_SESSION["usuarioactual"];
$opcion = $_POST['opcion'];

switch ($opcion) {

    case 'eliminarEquipo':

        $ids      = $_POST['ids'];
        $id_e     = $_POST['id_e'];
        $equi     = $_POST['equi'];
        $mar_equi = $_POST['mar_equi'];
        $model    = $_POST['model'];
        $ubi_equi = $_POST['ubi_equi'];
        $motivo   = $_POST['motivo'];
        $clase    = "Equipo";

        eliminar_equipo($ids, $id_e, $equi, $mar_equi, $model, $ubi_equi, $motivo, $clase, $user, $fecha, $con);

        break;

    case 'eliminarTorre':

        $ids      = $_POST['ids'];
        $id_t     = $_POST['id_t'];
        $ser      = $_POST['ser'];
        $pla      = $_POST['pla'];
        $mar_torr = $_POST['mar_torr'];
        $mod_torr = $_POST['mod_torr'];
        $ubi      = $_POST['ubi'];
        $mac_e    = $_POST['mac_e'];
        $mac_w    = $_POST['mac_w'];
        $moni     = $_POST['moni'];
        $mous     = $_POST['mous'];
        $tecl     = $_POST['tecl'];
        $motivo   = $_POST['motivo'];
        $clase    = "Torre";

        eliminar_torre($ids, $id_t, $ser, $pla, $mar_torr, $mod_torr, $ubi, $mac_e, $mac_w, $moni, $mous, $tecl, $motivo, $clase, $user, $fecha, $con);

        break;

    case 'eliminarMonitor':

        $ids     = $_POST['ids'];
        $id_m    = $_POST['id_m'];
        $seri    = $_POST['seri'];
        $mar_mon = $_POST['mar_mon'];
        $pla_mon = $_POST['pla_mon'];
        $ubi_mon = $_POST['ubi_mon'];
        $motivo  = $_POST['motivo'];
        $clase   = "Monitor";

        eliminar_monitor($ids, $id_m, $seri, $mar_mon, $pla_mon, $ubi_mon, $motivo, $clase, $user, $fecha, $con);

        break;

    case 'eliminarMouse':

        $ids      = $_POST['ids'];
        $id_mou   = $_POST['id_mou'];
        $seri_mou = $_POST['seri_mou'];
        $mar_mou  = $_POST['mar_mou'];
        $pla_mou  = $_POST['pla_mou'];
        $ubi_mou  = $_POST['ubi_mou'];
        $motivo   = $_POST['motivo'];
        $clase    = "Mouse";

        eliminar_mouse($ids, $id_mou, $seri_mou, $mar_mou, $pla_mou, $ubi_mou, $motivo, $clase, $user, $fecha, $con);

        break;

    case 'eliminarTeclado':

        $ids     = $_POST['ids'];
        $id_tec  = $_POST['id_tec'];
        $ser_tec = $_POST['ser_tec'];
        $mar_tec = $_POST['mar_tec'];
        $pla_tec = $_POST['pla_tec'];
        $ubi_tec = $_POST['ubi_tec'];
        $motivo  = $_POST['motivo'];
        $clase   = "Teclado";

        eliminar_teclado($ids, $id_tec, $ser_tec, $mar_tec, $pla_tec, $ubi_tec, $motivo, $clase, $user, $fecha, $con);

        break;

    case 'eliminarUsuario':

        $identificacion = $_POST["id"];

        eliminar_usuario($identificacion, $con);

        break;

    default:
        echo "vacio";
}

function eliminar_equipo($ids, $id_e, $equi, $mar_equi, $model, $ubi_equi, $motivo, $clase, $user, $fecha, $con)
{
    $sql1 = "INSERT INTO bajas (campo1, campo2, campo4, campo5, campo6, campo12, campo13, campo14, campo15) VALUES ('" . $id_e . "','" . $equi . "','" . $mar_equi . "','" . $model . "','" . $ubi_equi . "','" . $motivo . "','" . $clase . "','" . $user . "','" . $fecha . "' )";
    //$sql1="INSERT INTO bajas (SELECT * FROM teclado WHERE id_teclado='$id_tec' AND fecha='$fecha2')";
    $resultado1 = mysqli_query($con, $sql1);
    verificar_resultado($resultado1);

    $sql       = "DELETE FROM equipo_computo WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);

}

function eliminar_torre($ids, $id_t, $ser, $pla, $mar_torr, $mod_torr, $ubi, $mac_e, $mac_w, $moni, $mous, $tecl, $motivo, $clase, $user, $fecha, $con)
{
    $sql1 = "INSERT INTO bajas (campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, campo13, campo14, campo15) VALUES ('" . $id_t . "','" . $ser . "','" . $pla . "','" . $mar_torr . "', '" . $mod_torr . "','" . $ubi . "','" . $mac_e . "','" . $mac_w . "','" . $moni . "','" . $mous . "','" . $tecl . "','" . $motivo . "','" . $clase . "','" . $user . "','" . $fecha . "' )";

    $resultado1 = mysqli_query($con, $sql1);
    verificar_resultado($resultado1);

    $sql       = "DELETE FROM torre WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);

}

function eliminar_Monitor($ids, $id_m, $seri, $mar_mon, $pla_mon, $ubi_mon, $motivo, $clase, $user, $fecha, $con)
{
    $sql1 = "INSERT INTO bajas (campo1, campo2, campo3, campo4, campo6, campo12, campo13, campo14, campo15) VALUES ('" . $id_m . "','" . $seri . "','" . $pla_mon . "','" . $mar_mon . "','" . $ubi_mon . "','" . $motivo . "','" . $clase . "','" . $user . "','" . $fecha . "' )";

    $resultado1 = mysqli_query($con, $sql1);
    verificar_resultado($resultado1);

    $sql       = "DELETE FROM monitor WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);

}
function eliminar_Mouse($ids, $id_mou, $seri_mou, $mar_mou, $pla_mou, $ubi_mou, $motivo, $clase, $user, $fecha, $con)
{
    $sql1 = "INSERT INTO bajas (campo1, campo2, campo3, campo4, campo6, campo12, campo13, campo14, campo15) VALUES ('" . $id_mou . "','" . $seri_mou . "','" . $pla_mou . "','" . $mar_mou . "','" . $ubi_mou . "','" . $motivo . "','" . $clase . "','" . $user . "','" . $fecha . "' )";

    $resultado1 = mysqli_query($con, $sql1);
    verificar_resultado($resultado1);

    $sql       = "DELETE FROM mouse WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);

}

function eliminar_teclado($ids, $id_tec, $ser_tec, $mar_tec, $pla_tec, $ubi_tec, $motivo, $clase, $user, $fecha, $con)
{
    $sql1 = "INSERT INTO bajas (campo1, campo2, campo3, campo4, campo6, campo12, campo13, campo14, campo15) VALUES ('" . $id_tec . "','" . $ser_tec . "','" . $pla_tec . "','" . $mar_tec . "','" . $ubi_tec . "','" . $motivo . "','" . $clase . "','" . $user . "','" . $fecha . "' )";

    $resultado1 = mysqli_query($con, $sql1);
    verificar_resultado($resultado1);

    $sql       = "DELETE FROM teclado WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);

}

function eliminar_usuario($identificacion, $con)
{
    $sql       = "UPDATE usuarios SET estado = 0 WHERE identificacion = '" . $identificacion . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);

}

function verificar_resultado($resultado)
{
    if (!$resultado) {
        echo "error";
    } else {
        echo "elimino";
    }
}

function cerrar($con)
{
    mysqli_close($con);
}
