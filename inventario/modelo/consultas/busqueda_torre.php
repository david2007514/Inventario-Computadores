<?php

session_start();

include '../conexion.php';

$count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM torre");
$row         = mysqli_fetch_array($count_query);
$num = $row['numrows'];
if ($num > 0) {
        $numrows1 = $num;
    }    else{
        $numrows1 = 5;
    }

if ($_GET['selectedt'] == 'todo') {
    $seleccionados = $numrows1;
} else {
    $seleccionados = $_GET['selectedt'];
}

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != null) ? $_REQUEST['action'] : '';

if ($action == 'ajax') {
    // escaping, additionally removing everything that could be (html/javascript-) code
    $qt     = mysqli_real_escape_string($con, (strip_tags($_REQUEST['qt'], ENT_QUOTES)));
    $sTable = "torre INNER JOIN usuarios on torre.usuario=usuarios.identificacion";
    $sWhere = "";

    if ($_GET['qt'] != "") {

        $sWhere = "WHERE id_torre LIKE '%$qt%' || serial_torre LIKE '%$qt%' || placa_sena LIKE '%$qt%' || marca LIKE '%$qt%' || modelo LIKE '%$qt%' || ubicacion LIKE '%$qt%' || mac_ethernet LIKE '%$qt%' || mac_wlan LIKE '%$qt%' || torre_monitor LIKE '%$qt%' || torre_mouse LIKE '%$qt%' || torre_teclado LIKE '%$qt%'";

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

        header("Content-Type: application/vnd.ms-excel");

        header("Expires: 0");

        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

        header("content-disposition: attachment;filename=NOMBRE.xls");
        ?>
            <div class="table-responsive" style="margin-top: 10px;">
              <table class="table table-bordered table-hover">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Serial</th>
                    <th class="text-center">PLaca</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Modelo</th>
                    <th class="text-center">Ubicación</th>
                    <th class="text-center">Monitor</th>
                    <th class="text-center">Mouse</th>
                    <th class="text-center">Teclado</th>
                </tr>
                <?php
while ($row = mysqli_fetch_array($query)) {
            $id_torre  = $row['id_torre'];
            $serial    = $row['serial_torre'];
            $placa     = $row['placa_sena'];
            $marca     = $row['marca'];
            $modelo    = $row['modelo'];
            $ubicacion = $row['ubicacion'];
            $monitor   = $row['torre_monitor'];
            $mouse     = $row['torre_mouse'];
            $teclado   = $row['torre_teclado'];

            ?>
                    <tr class="fila fil">
                        <td><?php echo $id_torre; ?></td>
                        <td><?php echo $serial; ?></td>
                        <td><?php echo $placa; ?></td>
                        <td><?php echo $marca; ?></td>
                        <td><?php echo $modelo; ?></td>
                        <td><?php echo $ubicacion; ?></td>
                        <td><?php echo $monitor; ?></td>
                        <td><?php echo $mouse; ?></td>
                        <td><?php echo $teclado; ?></td>
                    </tr>
                    <?php
}
        ?>
                <tr>
                    <td colspan=9>
                      <span class="pull-right">
                        <div class="table-pagination pull-right">
                           <?php echo paginate($recargar, $pagina, $total_paginas, $adjacents); ?>
                        </div>
                      </span>

                             <?php
if ($_GET['qt'] != "") {
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