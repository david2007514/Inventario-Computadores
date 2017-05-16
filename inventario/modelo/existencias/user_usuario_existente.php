<?php
include '../conexion.php';
if ($_REQUEST) {
    $usuario     = $_POST['usuario'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM usuarios WHERE usuario = '" . strtolower($usuario) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
