<?php

session_start();

include '../conexion.php';

$count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM teclado");
$row         = mysqli_fetch_array($count_query);
$num = $row['numrows'];
if ($num > 0) {
        $numrows1 = $num;
    }    else{
        $numrows1 = 5;
    }

if ($_GET['selectedte'] == 'todo') {
    $seleccionados = $numrows1;
} else {
    $seleccionados = $_GET['selectedte'];
}

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != null) ? $_REQUEST['action'] : '';

if ($action == 'ajax') {
    // escaping, additionally removing everything that could be (html/javascript-) code
    $qte    = mysqli_real_escape_string($con, (strip_tags($_REQUEST['qte'], ENT_QUOTES)));
    $sTable = "teclado INNER JOIN usuarios on teclado.usuario=usuarios.identificacion";
    $sWhere = "";

    if ($_GET['qte'] != "") {

        $sWhere = "WHERE id_teclado LIKE '%$qte%' || serial_teclado LIKE '%$qte%' || marca_teclado LIKE '%$qte%' || placa_sena_teclado LIKE '%$qte%' || ubicacion LIKE '%$qte%'";

    } else {
        $sWhere = "WHERE id_teclado != ''";
    }

    include '../pagination.php'; //include pagination file
    //pagination variables
    $pagina         = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $tamagno_pagina = $seleccionados; //how much records you want to show
    $adjacents      = 4; //gap between pages after number of adjacents
    $empezar_desde  = ($pagina - 1) * $tamagno_pagina;
    //Count the total number of row in your table*/
    $count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
    $row           = mysqli_fetch_array($count_query);
    $numrows       = $row['numrows'];
    $total_paginas = ceil($numrows / $tamagno_pagina);
    $recargar      = 'administracion.php';
    //main query to fetch the data
    $sql   = "SELECT * FROM  $sTable $sWhere LIMIT $empezar_desde,$tamagno_pagina";
    $query = mysqli_query($con, $sql);
    //loop through fetched data
    if ($numrows > 0) {
        echo mysqli_error($con);
        ?>
            <div class="table-responsive" style="margin-top: 10px;">
              <table class="table table-bordered table-hover">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Serial</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Placa</th>
                    <th class="text-center">Ubicación</th>
                </tr>
                <?php
while ($row = mysqli_fetch_array($query)) {
            $id_teclado         = $row['id_teclado'];
            $serial_teclado     = $row['serial_teclado'];
            $marca_teclado      = $row['marca_teclado'];
            $placa_sena_teclado = $row['placa_sena_teclado'];
            $ubicacion          = $row['ubicacion'];
            ?>
                    <tr class="fila fil">
                        <td><?php echo $id_teclado; ?></td>
                        <td><?php echo $serial_teclado; ?></td>
                        <td><?php echo $marca_teclado; ?></td>
                        <td><?php echo $placa_sena_teclado; ?></td>
                        <td><?php echo $ubicacion; ?></td>
                    </tr>
                    <?php
}
        ?>
                <tr>
                    <td colspan=5>
                      <span class="pull-right">
                        <div class="table-pagination pull-right">
                           <?php echo paginate($recargar, $pagina, $total_paginas, $adjacents); ?>
                        </div>
                      </span>

                             <?php
if ($_GET['qte'] != "") {
            echo "Total filtrados: " . $numrows . " (Filtrados de un total de: " . $numrows1 . " registros)";
        } else if ($numrows < $seleccionados) {

            echo "Mostrando registros del 1 al " . $numrows . " de un total de " . $numrows1 . " registros";
        } else {
            echo "Mostrando registros del 1 al " . $seleccionados . " de un total de " . $numrows1 . " registros";
        }
        ?>
                    </td>


                </tr>

              </table>
            </div>
            <?php

    } else {
        echo "No hay datos para mostrar";
    }
}
?>