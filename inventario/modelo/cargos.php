<?php
include('conexion.php');
$query="SELECT * FROM cargo order by nombre_cargo";
 $resultado = $con->query($query);
 echo "<select name='cargo'>";
 echo '<option value="">Seleccionar cargo</option>';
 while ($row = $resultado->fetch_assoc()) {
       echo "<option value='".$row['id_cargo']."'>".$row['nombre_cargo']."</option>";
     }
     echo "</select>";
    // Liberar resultados
mysqli_free_result($result);
 
// Cerrar la conexión
mysqli_close($link);
?>
