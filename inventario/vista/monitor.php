<?php
if (isset($_GET['term'])) {
    include "../modelo/conexion.php";

    $return_arr = array();
/* If connection to database, run sql statement. */
    if ($con) {

        $fetch = mysqli_query($con, "SELECT * FROM monitor where id_monitor like '%" . mysqli_real_escape_string($con, ($_GET['term'])) . "%' LIMIT 0 ,50");

        /* Retrieve and store in array the results of the query.*/
        while ($row = mysqli_fetch_array($fetch)) {
            $id_monitor              = $row['id_monitor'];
            $row_array['value']      = $row['id_monitor'];
            $row_array['id_monitor'] = $id_monitor;
            array_push($return_arr, $row_array);
        }

    }

/* Free connection resources. */
    mysqli_close($con);

/* Toss back results as json encoded array. */
    echo json_encode($return_arr);

}
