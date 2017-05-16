<?php
include '../conexion.php';
if ($_REQUEST) {
    $id_monitor  = $_POST['id_monitor'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM monitor WHERE id_monitor = '" . strtolower($id_monitor) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
