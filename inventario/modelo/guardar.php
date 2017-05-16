<?php
include 'conexion.php';

session_start();

$fecha  = date("Y/m/d H:i:s");
$user   = $_SESSION["usuarioactual"];
$opcion = $_POST['opcion'];

switch ($opcion) {

    case 'registrarEquipo':

        $id_equipo = strtoupper($_POST["id_equipo"]);
        $equipo    = strtoupper($_POST['equipo']);
        $marca     = strtoupper($_POST["marca"]);
        $modelo    = strtoupper($_POST["modelo"]);
        $ubicacion = strtoupper($_POST["ubicacion"]);
        $estado = strtoupper($_POST["estado"]);

        $existe = existe_equipo($id_equipo, $con);
        if ($existe > 0) {
            echo "existe_equipo";
        } else {
            registrar_equipo($id_equipo, $equipo, $marca, $modelo, $ubicacion, $estado, $user, $fecha, $con);
        }

        break;

    case 'registrarTorre':

        $id_torre     = strtoupper($_POST["id_torre"]);
        $serial_torre = strtoupper($_POST["serial_torre"]);
        $placa_sena   = strtoupper($_POST["placa_sena"]);
        $marca        = strtoupper($_POST["marca"]);
        $modelo       = strtoupper($_POST["modelo"]);
        $ubicacion    = strtoupper($_POST["ubicacion"]);
        $mac_ethernet = strtoupper($_POST["mac_ethernet"]);
        $mac_wlan     = strtoupper($_POST["mac_wlan"]);
        $monitor      = strtoupper($_POST["monitor"]);
        $mouse        = strtoupper($_POST["mouse"]);
        $teclado      = strtoupper($_POST["teclado"]);
        $estado      = strtoupper($_POST["estado"]);

        $existe_id     = existe_id_torre($id_torre, $con);
        $existe_serial = existe_serial_torre($serial_torre, $con);
        $existe_placa  = existe_placa_torre($placa_sena, $con);
        if ($existe_id > 0) {
            echo "existe_id";
        } else if ($existe_serial > 0) {
            echo "existe_serial";
        } else if ($existe_placa > 0) {
            echo "existe_placa";
        } else {
            registrar_torre($id_torre, $serial_torre, $placa_sena, $marca, $modelo, $ubicacion, $mac_ethernet, $mac_wlan, $monitor, $mouse, $teclado, $estado, $user, $fecha, $con);
        }

        break;

    case 'registrarMonitor':

        $id_monitor         = strtoupper($_POST['id_monitor']);
        $serial_monitor     = strtoupper($_POST['serial_monitor']);
        $marca_monitor      = strtoupper($_POST['marca_monitor']);
        $placa_sena_monitor = strtoupper($_POST['placa_sena_monitor']);
        $ubicacion          = strtoupper($_POST['ubicacion']);
        $estado             = strtoupper($_POST['estado']);

        $existe_id     = existe_id_monitor($id_monitor, $con);
        $existe_serial = existe_serial_monitor($serial_monitor, $con);
        $existe_placa  = existe_placa_monitor($placa_sena_monitor, $con);
        if ($existe_id > 0) {
            echo "existe_id";
        } else if ($existe_serial > 0) {
            echo "existe_serial";
        } else if ($existe_placa > 0) {
            echo "existe_placa";
        } else {
            registrar_monitor($id_monitor, $serial_monitor, $marca_monitor, $placa_sena_monitor, $ubicacion, $estado, $user, $fecha, $con);
        }

        break;

    case 'registrarMouse':

        $id_mouse         = strtoupper($_POST["id_mouse"]);
        $serial_mouse     = strtoupper($_POST["serial_mouse"]);
        $marca_mouse      = strtoupper($_POST["marca_mouse"]);
        $placa_sena_mouse = strtoupper($_POST["placa_sena_mouse"]);
        $ubicacion        = strtoupper($_POST["ubicacion"]);
        $estado        = strtoupper($_POST["estado"]);

        $existe_id     = existe_id_mouse($id_mouse, $con);
        $existe_serial = existe_serial_mouse($serial_mouse, $con);
        $existe_placa  = existe_placa_mouse($placa_sena_mouse, $con);
        if ($existe_id > 0) {
            echo "existe_id";
        } else if ($existe_serial > 0) {
            echo "existe_serial";
        } else if ($existe_placa > 0) {
            echo "existe_placa";
        } else {
            registrar_mouse($id_mouse, $serial_mouse, $marca_mouse, $placa_sena_mouse, $ubicacion, $estado, $user, $fecha, $con);
        }

        break;

    case 'registrarTeclado':

        $id_teclado         = strtoupper($_POST["id_teclado"]);
        $serial_teclado     = strtoupper($_POST["serial_teclado"]);
        $marca_teclado      = strtoupper($_POST["marca_teclado"]);
        $placa_sena_teclado = strtoupper($_POST["placa_sena_teclado"]);
        $ubicacion          = strtoupper($_POST["ubicacion"]);
        $estado             = strtoupper($_POST["estado"]);

        $existe_id     = existe_id_teclado($id_teclado, $con);
        $existe_serial = existe_serial_teclado($serial_teclado, $con);
        $existe_placa  = existe_placa_teclado($placa_sena_teclado, $con);
        if ($existe_id > 0) {
            echo "existe_id";
        } else if ($existe_serial > 0) {
            echo "existe_serial";
        } else if ($existe_placa > 0) {
            echo "existe_placa";
        } else {
            registrar_teclado($id_teclado, $serial_teclado, $marca_teclado, $placa_sena_teclado, $ubicacion, $estado, $user, $fecha, $con);
        }

        break;

    case 'registrarUsuario':

        $identificacion   = mysqli_real_escape_string($con, (strip_tags($_POST["identificacion"], ENT_QUOTES)));
        $primer_nombre    = mysqli_real_escape_string($con, (strip_tags($_POST["primer_nombre"], ENT_QUOTES)));
        $segundo_nombre   = mysqli_real_escape_string($con, (strip_tags($_POST["segundo_nombre"], ENT_QUOTES)));
        $primer_apellido  = mysqli_real_escape_string($con, (strip_tags($_POST["primer_apellido"], ENT_QUOTES)));
        $segundo_apellido = mysqli_real_escape_string($con, (strip_tags($_POST["segundo_apellido"], ENT_QUOTES)));
        $cargo            = mysqli_real_escape_string($con, (strip_tags($_POST["cargo"], ENT_QUOTES)));
        $correo           = mysqli_real_escape_string($con, (strip_tags($_POST["correo"], ENT_QUOTES)));
        $usuario          = mysqli_real_escape_string($con, (strip_tags($_POST["usuario"], ENT_QUOTES)));
        $password         = mysqli_real_escape_string($con, (strip_tags(sha1($_POST["password"]))));
        $repassword       = mysqli_real_escape_string($con, (strip_tags(sha1($_POST["repassword"]))));
        $estado           = 1;

        if ($password != $repassword) {
            echo "no_iguales";
        } else {

            $existe_identificacion = existe_identificacion_usuario($identificacion, $con);
            $existe_user           = existe_user_usuario($usuario, $con);
            if ($existe_identificacion > 0) {
                echo "existe_identificacion";
            } else if ($existe_user > 0) {
                echo "existe_usuario";
            } else {
                registrar_usuario($identificacion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cargo, $correo, $usuario, $password, $estado, $fecha, $con);
            }
        }
        break;

    default:
        echo "vacio";
        break;
}

function existe_equipo($id_equipo, $con)
{
    $query         = "SELECT id_equipo FROM equipo_computo WHERE id_equipo = '$id_equipo'";
    $resultado     = mysqli_query($con, $query);
    $existe_equipo = mysqli_num_rows($resultado);
    return $existe_equipo;
}

function existe_id_torre($id_torre, $con)
{
    $query           = "SELECT id_torre FROM torre WHERE id_torre = '$id_torre' ";
    $resultado       = mysqli_query($con, $query);
    $existe_id_torre = mysqli_num_rows($resultado);
    return $existe_id_torre;
}

function existe_serial_torre($serial_torre, $con)
{
    $query               = "SELECT serial_torre FROM torre WHERE serial_torre = '$serial_torre' and serial_torre != 'NO TIENE' ";
    $resultado           = mysqli_query($con, $query);
    $existe_serial_torre = mysqli_num_rows($resultado);
    return $existe_serial_torre;
}

function existe_placa_torre($placa_sena, $con)
{
    $query              = "SELECT placa_sena FROM torre WHERE placa_sena = '$placa_sena' and placa_sena != 'NO TIENE' ";
    $resultado          = mysqli_query($con, $query);
    $existe_placa_torre = mysqli_num_rows($resultado);
    return $existe_placa_torre;
}

function existe_id_monitor($id_monitor, $con)
{
    $query             = "SELECT id_monitor FROM monitor WHERE id_monitor = '$id_monitor' ";
    $resultado         = mysqli_query($con, $query);
    $existe_id_monitor = mysqli_num_rows($resultado);
    return $existe_id_monitor;
}

function existe_serial_monitor($serial_monitor, $con)
{
    $query                 = "SELECT serial_monitor FROM monitor WHERE serial_monitor = '$serial_monitor' and serial_monitor != 'NO TIENE' ";
    $resultado             = mysqli_query($con, $query);
    $existe_serial_monitor = mysqli_num_rows($resultado);
    return $existe_serial_monitor;
}

function existe_placa_monitor($placa_sena_monitor, $con)
{
    $query                = "SELECT placa_sena_monitor FROM monitor WHERE placa_sena_monitor = '$placa_sena_monitor' and placa_sena_monitor != 'NO TIENE' ";
    $resultado            = mysqli_query($con, $query);
    $existe_placa_monitor = mysqli_num_rows($resultado);
    return $existe_placa_monitor;
}

function existe_id_mouse($id_mouse, $con)
{
    $query           = "SELECT id_mouse FROM mouse WHERE id_mouse = '$id_mouse' ";
    $resultado       = mysqli_query($con, $query);
    $existe_id_mouse = mysqli_num_rows($resultado);
    return $existe_id_mouse;
}

function existe_serial_mouse($serial_mouse, $con)
{
    $query               = "SELECT serial_mouse FROM mouse WHERE serial_mouse = '$serial_mouse' and serial_mouse != 'NO TIENE' ";
    $resultado           = mysqli_query($con, $query);
    $existe_serial_mouse = mysqli_num_rows($resultado);
    return $existe_serial_mouse;
}

function existe_placa_mouse($placa_sena_mouse, $con)
{
    $query              = "SELECT placa_sena_mouse FROM mouse WHERE placa_sena_mouse = '$placa_sena_mouse' and placa_sena_mouse != 'NO TIENE' ";
    $resultado          = mysqli_query($con, $query);
    $existe_placa_mouse = mysqli_num_rows($resultado);
    return $existe_placa_mouse;
}

function existe_id_teclado($id_teclado, $con)
{
    $query             = "SELECT id_teclado FROM teclado WHERE id_teclado = '$id_teclado' ";
    $resultado         = mysqli_query($con, $query);
    $existe_id_teclado = mysqli_num_rows($resultado);
    return $existe_id_teclado;
}

function existe_serial_teclado($serial_teclado, $con)
{
    $query                 = "SELECT serial_teclado FROM teclado WHERE serial_teclado = '$serial_teclado' and serial_teclado != 'NO TIENE' ";
    $resultado             = mysqli_query($con, $query);
    $existe_serial_teclado = mysqli_num_rows($resultado);
    return $existe_serial_teclado;
}

function existe_placa_teclado($placa_sena_teclado, $con)
{
    $query                = "SELECT placa_sena_teclado FROM teclado WHERE placa_sena_teclado = '$placa_sena_teclado' and placa_sena_teclado != 'NO TIENE' ";
    $resultado            = mysqli_query($con, $query);
    $existe_placa_teclado = mysqli_num_rows($resultado);
    return $existe_placa_teclado;
}

function existe_identificacion_usuario($identificacion, $con)
{
    $query                         = "SELECT identificacion FROM usuarios WHERE identificacion = '$identificacion' ";
    $resultado                     = mysqli_query($con, $query);
    $existe_identificacion_usuario = mysqli_num_rows($resultado);
    return $existe_identificacion_usuario;
}

function existe_user_usuario($usuario, $con)
{
    $query               = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' ";
    $resultado           = mysqli_query($con, $query);
    $existe_user_usuario = mysqli_num_rows($resultado);
    return $existe_user_usuario;
}

function registrar_equipo($id_equipo, $equipo, $marca, $modelo, $ubicacion, $estado, $user, $fecha, $con)
{

    $sql       = "INSERT INTO equipo_computo (id_equipo, equipo, marca, modelo, ubicacion, estado, usuario, fecha_ingr) VALUES ('" . $id_equipo . "','" . $equipo . "','" . $marca . "', '" . $modelo . "','" . $ubicacion . "','". $estado . "','" . $user . "','" . $fecha . "' )";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    //echo mysqli_error($con);
    cerrar($con);
}

function registrar_torre($id_torre, $serial_torre, $placa_sena, $marca, $modelo, $ubicacion, $mac_ethernet, $mac_wlan, $monitor, $mouse, $teclado, $estado, $user, $fecha,  $con)
{

    $sql       = "INSERT INTO torre (id_torre, serial_torre, placa_sena, marca, modelo, ubicacion, mac_ethernet, mac_wlan, torre_monitor, torre_mouse, torre_teclado, usuario, fecha_ingr, estado) VALUES ('" . $id_torre . "','" . $serial_torre . "', '" . $placa_sena . "', '" . $marca . "', '" . $modelo . "','" . $ubicacion . "', '" . $mac_ethernet . "','" . $mac_wlan . "','" . $monitor . "','" . $mouse . "','" . $teclado . "','" . $user . "','" . $fecha . "','" . $estado."' )";
    $resultado = mysqli_query($con, $sql);  
    verificar_resultado($resultado);
    echo mysqli_error($con);
    cerrar($con);
}

function registrar_monitor($id_monitor, $serial_monitor, $marca_monitor, $placa_sena_monitor, $ubicacion, $estado, $user, $fecha, $con)
{

    $sql       = "INSERT INTO monitor (id_monitor, serial_monitor, marca_monitor, placa_sena_monitor, ubicacion, estado, usuario, fecha_ingr) VALUES ('" . $id_monitor . "','" . $serial_monitor . "','" . $marca_monitor . "', '" . $placa_sena_monitor . "','" . $ubicacion ."','".$estado. "','" . $user . "','" . $fecha . "' )";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function registrar_mouse($id_mouse, $serial_mouse, $marca_mouse, $placa_sena_mouse, $ubicacion, $estado, $user, $fecha, $con)
{

    $sql       = "INSERT INTO mouse (id_mouse, serial_mouse, marca_mouse, placa_sena_mouse, ubicacion,estado, usuario, fecha_ingr) VALUES ('" . $id_mouse . "','" . $serial_mouse . "','" . $marca_mouse . "','" . $placa_sena_mouse . "','" . $ubicacion ."','".$estado. "','" . $user . "','" . $fecha . "' )";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function registrar_teclado($id_teclado, $serial_teclado, $marca_teclado, $placa_sena_teclado, $ubicacion, $estado, $user, $fecha, $con)
{

    $sql       = "INSERT INTO teclado (id_teclado, serial_teclado, marca_teclado, placa_sena_teclado, ubicacion, estado, usuario, fecha_ingr) VALUES ('" . $id_teclado . "','" . $serial_teclado . "','" . $marca_teclado . "','" . $placa_sena_teclado . "','" . $ubicacion ."','".$estado. "','$user','" . $fecha . "' )";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    cerrar($con);
}

function registrar_usuario($identificacion, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $cargo, $correo, $usuario, $password, $estado, $fecha, $con)
{

    $sql       = "INSERT INTO usuarios (identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, cargo, correo, usuario, password, estado, fecha_ingr) VALUES ('" . $identificacion . "','" . $primer_nombre . "','" . $segundo_nombre . "', '" . $primer_apellido . "','" . $segundo_apellido . "','" . $cargo . "','" . $correo . "','" . $usuario . "','" . $password . "','" . $estado . "','" . $fecha . "' )";
    $resultado = mysqli_query($con, $sql);
    verificar_resultado($resultado);
    //echo mysqli_error($con); quitar las barras para saber la linea del error
    cerrar($con);
}

function verificar_resultado($resultado)
{
    if (!$resultado) {
        echo "error";
    } else {
        echo "registro";
    }
}

function cerrar($con)
{
    mysqli_close($con);
}
