<?php
include '../conexion.php';
if ($_REQUEST) {
    $id_torre    = $_POST['id_torre'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM torre WHERE id_torre = '" . strtolower($id_torre) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
