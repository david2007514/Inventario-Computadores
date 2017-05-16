<?php
include '../conexion.php';
if ($_REQUEST) {
    $serial_monitor = $_POST['serial_monitor'];
    $count_query    = mysqli_query($con, "SELECT count(*) AS numrows FROM monitor WHERE serial_monitor = '$serial_monitor' and serial_monitor != 'NO TIENE' ");
    $row            = mysqli_fetch_array($count_query);
    $numrows        = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
