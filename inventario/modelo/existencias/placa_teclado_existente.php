<?php
include '../conexion.php';
if ($_REQUEST) {
    $placa_sena_teclado = $_POST['placa_sena_teclado'];
    $count_query        = mysqli_query($con, "SELECT count(*) AS numrows FROM teclado WHERE placa_sena_teclado = '$placa_sena_teclado' and placa_sena_teclado != 'NO TIENE' ");
    $row                = mysqli_fetch_array($count_query);
    $numrows            = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
