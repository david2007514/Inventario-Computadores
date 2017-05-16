<?php
include '../conexion.php';
if ($_REQUEST) {
    $identificacion = $_POST['identificacion'];
    $count_query    = mysqli_query($con, "SELECT count(*) AS numrows FROM usuarios WHERE identificacion = '" . strtolower($identificacion) . "'");
    $row            = mysqli_fetch_array($count_query);
    $numrows        = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
