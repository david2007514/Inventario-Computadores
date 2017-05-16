<?php
include "conexion.php";
session_start();
//$contra = $_REQUEST['password'];

//$pass = $_REQUEST['password'];
$contra = mysqli_real_escape_string($con, (strip_tags(sha1($_REQUEST["password"]))));

$user = $_REQUEST['usuario'];

$query = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$contra'";

$resultado = $con->query($query);

if ($row = $resultado->fetch_array()) {

    $cargo  = $row['cargo'];
    $estado = $row['estado'];

    if ($cargo == '1' and $estado == 1) {

        $_SESSION["usuarioactual"] = $row["identificacion"];

        $_SESSION["admin"] = $row["primer_nombre"];

        header("location: ../vista/administracion.php");

    } else if ($cargo == '0' and $estado == 1) {

        $_SESSION["usuarioactual"] = $row["identificacion"];

        $_SESSION["usuario"] = $row["primer_nombre"];

        header("location: ../vista/administracion2.php");

    } else if ($cargo == '2' and $estado == 1) {

        $_SESSION["usuarioactual"] = $row["identificacion"];

        $_SESSION["consultador"] = $row["primer_nombre"];

        header("location: ../vista/consultas.php");

    } else if ($estado == 0) {
        header("Location: ../vista/login.php?inicio=E");
    }

} else {
    header("Location: ../vista/login.php?inicio=N");
}
