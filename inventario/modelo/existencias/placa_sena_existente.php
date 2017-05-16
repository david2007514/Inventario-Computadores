<?php
include '../conexion.php';
if ($_REQUEST) {
    $placa_sena  = $_POST['placa_sena'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM torre WHERE placa_sena = '$placa_sena' and placa_sena != 'NO TIENE' ");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
