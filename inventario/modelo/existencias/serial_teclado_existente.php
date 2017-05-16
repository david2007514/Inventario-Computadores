<?php
include '../conexion.php';
if ($_REQUEST) {
    $serial_teclado = $_POST['serial_teclado'];
    $count_query    = mysqli_query($con, "SELECT count(*) AS numrows FROM teclado WHERE serial_teclado = '$serial_teclado' and serial_teclado != 'NO TIENE' ");
    $row            = mysqli_fetch_array($count_query);
    $numrows        = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
