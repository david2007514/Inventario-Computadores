<?php
include '../conexion.php';
if ($_REQUEST) {
    $placa_sena_mouse = $_POST['placa_sena_mouse'];
    $count_query      = mysqli_query($con, "SELECT count(*) AS numrows FROM mouse WHERE placa_sena_mouse = '$placa_sena_mouse' and placa_sena_mouse != 'NO TIENE' ");
    $row              = mysqli_fetch_array($count_query);
    $numrows          = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
