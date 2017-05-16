<?php
include '../conexion.php';
if ($_REQUEST) {
    $serial_torre = $_POST['serial_torre'];
    $count_query  = mysqli_query($con, "SELECT count(*) AS numrows FROM torre WHERE serial_torre = '$serial_torre' and serial_torre != 'NO TIENE' ");
    $row          = mysqli_fetch_array($count_query);
    $numrows      = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
