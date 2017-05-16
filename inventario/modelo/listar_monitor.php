<?php

session_start();

include 'conexion.php';

$count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM monitor");
$row         = mysqli_fetch_array($count_query);
$num = $row['numrows'];
if ($num > 0) {
        $numrows1 = $num;
    }    else{
        $numrows1 = 5;
    }

if (isset($_GET['selectedm'])) {
    if ($_GET['selectedm'] == 'todo') {
        $seleccionados = $numrows1;
    } else {
        $seleccionados = $_GET['selectedm'];
    }
} else {
    $seleccionados = $numrows1;
}

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != null) ? $_REQUEST['action'] : '';

if ($action == 'ajax') {
    // escaping, additionally removing everything that could be (html/javascript-) code
    $qm     = mysqli_real_escape_string($con, (strip_tags($_REQUEST['qm'], ENT_QUOTES)));
    $sTable = "monitor INNER JOIN usuarios on monitor.usuario=usuarios.identificacion";
    $sWhere = "";

    if ($_GET['qm'] != "") {

        $sWhere = "WHERE id_monitor LIKE '%$qm%' || serial_monitor LIKE '%$qm%' || marca_monitor LIKE '%$qm%' || placa_sena_monitor LIKE '%$qm%' || ubicacion LIKE '%$qm%'";

    } else {
        $sWhere = "WHERE id_monitor != ''";
    }
    include 'pagination.php'; //include pagination file
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
        <a href="../modelo/output.php?t=word" target="_blank">Word</a> |
        <a href="../modelo/output.php?t=excel" target="_blank">Excel</a> |
        <a href="../modelo/output.php?t=pdf" target="_blank">Pdf</a>
            <div class="table-responsive" style="margin-top: 10px;">
              <table class="table table-bordered table-hover">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Serial</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Placa</th>
                    <th class="text-center">Ubicacion</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Registró</th>
                    <th class="text-center">Acciones</th>

                </tr>
                <?php
while ($row = mysqli_fetch_array($query)) {
            $id_monitor         = $row['id_monitor'];
            $serial_monitor     = $row['serial_monitor'];
            $marca_monitor      = $row['marca_monitor'];
            $placa_sena_monitor = $row['placa_sena_monitor'];
            $ubicacion          = $row['ubicacion'];
            $estado          = $row[6];
            $registro           = $row['primer_nombre'] . " " . $row['primer_apellido'];
            ?>
                    <tr class="fila fil">
                        <td><?php echo $id_monitor; ?></td>
                        <td><?php echo $serial_monitor; ?></td>
                        <td><?php echo $marca_monitor; ?></td>
                        <td><?php echo $placa_sena_monitor; ?></td>
                        <td><?php echo $ubicacion; ?></td>
                        <td><?php echo $estado; ?></td>
                        <td><?php echo $registro; ?></td>

                    <td class="text-center">
                        <button title="Modificar" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#datosUpdateMonitor" data-ids="<?php echo $row['id'] ?>" data-id="<?php echo $row['id_monitor'] ?>" data-serial="<?php echo $row['serial_monitor'] ?>" data-marca="<?php echo $row['marca_monitor'] ?>" data-placa="<?php echo $row['placa_sena_monitor'] ?>" data-ubicacion="<?php echo $row['ubicacion'] ?>" data-estado="<?php echo $row[6] ?>"><i class='glyphicon glyphicon-edit'></i></button>
                        <?php if (isset($_SESSION["admin"])) {

                ?>

                                <button title="Eliminar" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#datosDeleteMonitor" data-ids="<?php echo $row['id'] ?>" data-id="<?php echo $row['id_monitor'] ?>" data-serial="<?php echo $row['serial_monitor'] ?>" data-marca="<?php echo $row['marca_monitor'] ?>" data-placa="<?php echo $row['placa_sena_monitor'] ?>" data-ubicacion="<?php echo $row['ubicacion'] ?>" data-estado="<?php echo $row[6] ?>"><i class='glyphicon glyphicon-trash'></i></button>
                            <?php

            } else if (isset($_SESSION["usuario"])) {
                ?>
                                 <button disabled title="Eliminar" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#datosDeleteMonitor" data-ids="<?php echo $row['id'] ?>" data-id="<?php echo $row['id_monitor'] ?>" data-serial="<?php echo $row['serial_monitor'] ?>" data-marca="<?php echo $row['marca_monitor'] ?>" data-placa="<?php echo $row['placa_sena_monitor'] ?>" data-ubicacion="<?php echo $row['ubicacion'] ?>" data-estado="<?php echo $row[6] ?>"><i class='glyphicon glyphicon-trash'></i></button>
                                <?php
}

            ?>
                    </td>


                    </tr>
                    <?php
}
        ?>
                <tr>
                    <td colspan=7>
                      <span class="pull-right">
                        <div class="table-pagination pull-right">
                           <?php echo paginate($recargar, $pagina, $total_paginas, $adjacents); ?>
                        </div>
                      </span>

                             <?php
if ($_GET['qm'] != "") {
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