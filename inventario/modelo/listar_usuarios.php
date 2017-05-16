<?php

include 'conexion.php';

$count_query = mysqli_query($con, "SELECT count(*) AS numrows FROM usuarios");
$row         = mysqli_fetch_array($count_query);
$num = $row['numrows'];
if ($num > 0) {
        $numrows1 = $num;
    }    else{
        $numrows1 = 5;
    }

if ($_GET['selectedu'] == 'todo') {
    $seleccionados = $numrows1;
} else {
    $seleccionados = $_GET['selectedu'];
}

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != null) ? $_REQUEST['action'] : '';

if ($action == 'ajax') {
    // escaping, additionally removing everything that could be (html/javascript-) code
    $qu     = mysqli_real_escape_string($con, (strip_tags($_REQUEST['qu'], ENT_QUOTES)));
    $sTable = "usuarios INNER JOIN cargo on usuarios.cargo=cargo.id_cargo";
    $sWhere = "";

    if ($_GET['qu'] != "") {

        $sWhere = "WHERE estado = 1 and identificacion LIKE '%$qu%' || estado = 1 and primer_nombre LIKE '%$qu%' || estado = 1 and segundo_nombre LIKE '%$qu%' || estado = 1 and primer_apellido LIKE '%$qu%' || estado = 1 and segundo_apellido LIKE '%$qu%' || estado = 1 and correo LIKE '%$qu%' || estado = 1 and usuario LIKE '%$qu%'";

    } else {
        $sWhere = "WHERE estado = 1 and identificacion != 0";
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
            <div class="table-responsive" style="margin-top: 10px;">
              <table class="table table-bordered table-hover">
                <tr>
                    <th class="text-center">Identificacion</th>
                    <th class="text-center">Primer Nombre</th>
                    <th class="text-center">Segundo Nombre</th>
                    <th class="text-center">Primer Apellido</th>
                    <th class="text-center">Segundo Apellido</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">Cargo</th>
                    <th class="text-center">Acciones</th>

                </tr>
                <?php
while ($row = mysqli_fetch_array($query)) {
            $identificacion   = $row['identificacion'];
            $primer_nombre    = $row['primer_nombre'];
            $segundo_nombre   = $row['segundo_nombre'];
            $primer_apellido  = $row['primer_apellido'];
            $segundo_apellido = $row['segundo_apellido'];
            $correo           = $row['correo'];
            $usuario          = $row['usuario'];
            $cargo            = $row['nombre_cargo'];
            ?>
                    <tr class="fila fil">
                        <td><?php echo $identificacion; ?></td>
                        <td><?php echo $primer_nombre; ?></td>
                        <td><?php echo $segundo_nombre; ?></td>
                        <td><?php echo $primer_apellido; ?></td>
                        <td><?php echo $segundo_apellido; ?></td>
                        <td><?php echo $correo; ?></td>
                        <td><?php echo $usuario; ?></td>
                        <td><?php echo $cargo; ?></td>
                    <td class="text-center">
                        <button title="Modificar" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#datosUpdateUsuario" data-ids="<?php echo $row['ids'] ?>" data-id="<?php echo $row['identificacion'] ?>" data-nom="<?php echo $row['primer_nombre'] ?>" data-no="<?php echo $row['segundo_nombre'] ?>" data-ape="<?php echo $row['primer_apellido'] ?>" data-ap="<?php echo $row['segundo_apellido'] ?>" data-correo="<?php echo $row['correo'] ?>" data-usuario="<?php echo $row['usuario'] ?>"><i class='glyphicon glyphicon-edit'></i></button>

                                <button title="Eliminar" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#datosDeleteUsuario" data-id="<?php echo $row['identificacion'] ?>"><i class='glyphicon glyphicon-trash'></i></button>
                    </td>

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
if ($_GET['qu'] != "") {
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