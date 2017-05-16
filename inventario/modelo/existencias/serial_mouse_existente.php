<?php
include '../conexion.php';
if ($_REQUEST) {
    $serial_mouse = $_POST['serial_mouse'];
    $count_query  = mysqli_query($con, "SELECT count(*) AS numrows FROM mouse WHERE serial_mouse = '$serial_mouse' and serial_mouse != 'NO TIENE' ");
    $row          = mysqli_fetch_array($count_query);
    $numrows      = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
