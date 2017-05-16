<?php
include 'conexion.php';

$opcion = $_POST['opcion'];

switch ($opcion) {

    case 'modificarEquipo':

        $ids       = $_POST["ids"];
        $id        = strtoupper($_POST["id"]);
        $equipo    = strtoupper($_POST["equipo"]);
        $marca     = strtoupper($_POST["marca"]);
        $modelo    = strtoupper($_POST["modelo"]);
        $ubicacion = strtoupper($_POST["ubicacion"]);
        $estado   = strtoupper($_POST["estado"]);

        modificar_equipo($ids, $id, $equipo, $marca, $modelo, $ubicacion, $estado, $con);
        break;

    case 'modificarTorre':

        $ids       = $_POST["ids"];
        $id        = strtoupper($_POST["id"]);
        $serial    = strtoupper($_POST["serial"]);
        $placa     = strtoupper($_POST["placa"]);
        $marca     = strtoupper($_POST["marca"]);
        $modelo    = strtoupper($_POST["modelo"]);
        $ubicacion = strtoupper($_POST["ubicacion"]);
        $ma        = strtoupper($_POST["ma"]);
        $mac       = strtoupper($_POST["mac"]);
        $mon       = strtoupper($_POST["mon"]);
        $mou       = strtoupper($_POST["mou"]);
        $tec       = strtoupper($_POST["tec"]);
        $est       = strtoupper($_POST["estado"]);


        modificar_torre($ids, $id, $serial, $placa, $marca, $modelo, $ubicacion, $ma, $mac, $mon, $mou, $tec, $est, $con);
        break;

    case 'modificarMonitor':

        $ids       = $_POST["ids"];
        $id        = strtoupper($_POST["id"]);
        $serial    = strtoupper($_POST["serial"]);
        $marca     = strtoupper($_POST["marca"]);
        $placa     = strtoupper($_POST["placa"]);
        $ubicacion = strtoupper($_POST["ubicacion"]);
        $estado = strtoupper($_POST["estado"]);

        modificar_monitor($ids, $id, $serial, $marca, $placa, $ubicacion, $estado, $con);
        break;

    case 'modificarMouse':

        $ids       = $_POST["ids"];
        $id        = strtoupper($_POST["id"]);
        $serial    = strtoupper($_POST["serial"]);
        $marca     = strtoupper($_POST["marca"]);
        $placa     = strtoupper($_POST["placa"]);
        $ubicacion = strtoupper($_POST["ubicacion"]);
        $estado = strtoupper($_POST["estado"]);

        modificar_mouse($ids, $id, $serial, $marca, $placa, $estado, $con);
        break;

    case 'modificarTeclado':

        $ids       = $_POST["ids"];
        $id        = strtoupper($_POST["id"]);
        $serial    = strtoupper($_POST["serial"]);
        $marca     = strtoupper($_POST["marca"]);
        $placa     = strtoupper($_POST["placa"]);
        $ubicacion = strtoupper($_POST["ubicacion"]);
        $estado = strtoupper($_POST["estado"]);

        modificar_teclado($ids, $id, $serial, $marca, $placa, $ubicacion, $estado, $con);
        break;

    case 'modificarUsuario':

        $ids              = $_POST["ids"];
        $identificacion   = $_POST["id"];
        $primer_nombre    = $_POST["pnom"];
        $segundo_nombre   = $_POST["snom"];
        $primer_apellido  = $_POST["piape"];
        $segundo_apellido = $_POST["seape"];
        $cargo            = $_POST["cargoo"];
        $correo           = $_POST["correo"];
        $usuario          = $_POST["usuario"];
        $password         = mysqli_real_escape_string($con, (strip_tags(sha1($_POST["password"]))));
        $repassword       = mysqli_real_escape_string($con, (strip_tags(sha1($_POST["repassword"]))));

        if ($password != $repassword) {
            echo "no_iguales";
        } else {

            modificar_usuario($ids, $identificacion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cargo, $correo, $usuario, $password, $con);
        }

        break;

    default:
        echo "vacio";
        break;
}

function modificar_equipo($ids, $id, $equipo, $marca, $modelo, $ubicacion, $estado, $con)
{
    $sql = "UPDATE equipo_computo SET id_equipo='" . $id . "', equipo='" . $equipo . "', marca='" . $marca . "',
        modelo='" . $modelo . "', ubicacion='" . $ubicacion . "', estado='" . $estado . "' WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function modificar_torre($ids, $id, $serial, $placa, $marca, $modelo, $ubicacion, $ma, $mac, $mon, $mou, $tec, $est, $con)
{
    $sql       = "UPDATE torre SET id_torre='" . $id . "', serial_torre='" . $serial . "', placa_sena='" . $placa . "', marca='" . $marca . "', modelo='" . $modelo . "', ubicacion='" . $ubicacion . "', mac_ethernet='" . $ma . "', mac_wlan='" . $mac . "', torre_monitor='" . $mon . "', torre_mouse='" . $mou . "', torre_teclado='" . $tec . "', estado='" . $est . "' WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function modificar_monitor($ids, $id, $serial, $marca, $placa, $ubicacion, $estado, $con)
{
    $sql = "UPDATE monitor SET id_monitor='" . $id . "', serial_monitor='" . $serial . "', marca_monitor='" . $marca . "',
        placa_sena_monitor='" . $placa . "', ubicacion='" . $ubicacion . "', estado='" . $estado . "' WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function modificar_mouse($ids, $id, $serial, $marca, $placa, $ubicacion, $estado, $con)
{
    $sql = "UPDATE mouse SET id_mouse='" . $id . "', serial_mouse='" . $serial . "', marca_mouse='" . $marca . "',
        placa_sena_mouse='" . $placa . "', ubicacion='" . $ubicacion . "', estado='" . $estado .  "' WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function modificar_teclado($ids, $id, $serial, $marca, $placa, $ubicacion, $estado, $con)
{
    $sql = "UPDATE teclado SET id_teclado='" . $id . "', serial_teclado='" . $serial . "', marca_teclado='" . $marca . "',
        placa_sena_teclado='" . $placa . "', ubicacion='" . $ubicacion . "', estado='" . $estado .  "' WHERE id='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function modificar_usuario($ids, $identificacion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cargo, $correo, $usuario, $password, $con)
{
    $sql = "UPDATE usuarios SET primer_nombre='" . $primer_nombre . "', segundo_nombre='" . $segundo_nombre . "',
        primer_apellido='" . $primer_apellido . "', segundo_apellido='" . $segundo_apellido . "', cargo='" . $cargo . "', correo='" . $correo . "', usuario='" . $usuario . "', password='" . $password . "' WHERE ids='" . $ids . "'";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function verificar_resultado($resultado)
{
    if (!$resultado) {
        echo "error";
    } else {
        echo "modifico";
    }
}

function cerrar($con)
{
    mysqli_close($con);
}
