<?php
include '../conexion.php';
if ($_REQUEST) {
    $id_equipo   = $_POST['id_equipo'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM equipo_computo WHERE id_equipo = '" . strtolower($id_equipo) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) // not available
    {
        echo 'no';
    } else {
        echo 'si';
    }

}
