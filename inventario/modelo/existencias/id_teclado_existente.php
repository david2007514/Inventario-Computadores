<?php
include '../conexion.php';
if ($_REQUEST) {
    $id_teclado  = $_POST['id_teclado'];
    $count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM teclado WHERE id_teclado = '" . strtolower($id_teclado) . "'");
    $row         = mysqli_fetch_array($count_query);
    $numrows     = $row['numrows'];

    if ($numrows > 0) {
        echo 'no';
    } else {
        echo 'si';
    }

}
