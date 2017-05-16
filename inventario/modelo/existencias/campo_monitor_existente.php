<?php
include '../conexion.php';
if ($_REQUEST) {
    $mon         = $_POST['mon'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM monitor WHERE id_monitor = '" . strtolower($mon) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
