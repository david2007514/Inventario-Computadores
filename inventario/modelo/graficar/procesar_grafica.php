<?php
include '../conexion.php';

$año = $_POST['año'];

$count_query1 = mysqli_query($con, "SELECT count(*) AS numrows FROM equipo_computo");
$row          = mysqli_fetch_array($count_query1);
$equipo       = $row['numrows'];

$count_query2 = mysqli_query($con, "SELECT count(*) AS numrows1 FROM torre");
$row          = mysqli_fetch_array($count_query2);
$torre        = $row['numrows1'];

$count_query3 = mysqli_query($con, "SELECT count(*) AS numrows2 FROM monitor");
$row          = mysqli_fetch_array($count_query3);
$monitor      = $row['numrows2'];

$count_query4 = mysqli_query($con, "SELECT count(*) AS numrows3 FROM mouse");
$row          = mysqli_fetch_array($count_query4);
$mouse        = $row['numrows3'];

$count_query5 = mysqli_query($con, "SELECT count(*) AS numrows4 FROM teclado");
$row          = mysqli_fetch_array($count_query5);
$teclado      = $row['numrows4'];

$count_query6 = mysqli_query($con, "SELECT count(*) AS numrows5 FROM usuarios WHERE estado != 0");
$row          = mysqli_fetch_array($count_query6);
$usuarios     = $row['numrows5'];

$data = array(
    0 => $equipo,
    1 => $torre,
    2 => $monitor,
    3 => $mouse,
    4 => $teclado,
    5 => $usuarios,
);
echo json_encode($data);
