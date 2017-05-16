<?php
# conectare la base de datos
$con = @mysqli_connect('localhost', 'root', 'usbw', 'inventario_sena');
if (!$con) {
    die("imposible conectarse: " . mysqli_error($con));
}
if (@mysqli_connect_errno()) {
    die("Connect failed: " . mysqli_connect_errno() . " : " . mysqli_connect_error());
}
