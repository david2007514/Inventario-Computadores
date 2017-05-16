<?php
include '../conexion.php';
if ($_REQUEST) {
    $mouse       = $_POST['mouse'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM mouse WHERE id_mouse = '" . strtolower($mouse) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
