<?php
include '../conexion.php';
if ($_REQUEST) {
    $mou         = $_POST['mou'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM mouse WHERE id_mouse = '" . strtolower($mou) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
