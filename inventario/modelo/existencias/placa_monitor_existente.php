<?php
include '../conexion.php';
if ($_REQUEST) {
    $placa_sena_monitor = $_POST['placa_sena_monitor'];
    $count_query        = mysqli_query($con, "SELECT count(*) AS numrows FROM monitor WHERE placa_sena_monitor = '$placa_sena_monitor' and placa_sena_monitor != 'NO TIENE' ");
    $row                = mysqli_fetch_array($count_query);
    $numrows            = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
