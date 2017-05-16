<?php
include '../conexion.php';
$consulta  = "SELECT * FROM equipo_computo INNER JOIN usuarios on equipo_computo.usuario=usuarios.identificacion ORDER BY id_equipo";
$resultado = $con->query($consulta);
if ($resultado->num_rows > 0) {

    date_default_timezone_set('America/Bogota');

    if (PHP_SAPI == 'cli') {
        die('Este archivo solo se puede ver desde un navegador web');
    }

    /** Se agrega la libreria PHPExcel */
    require_once '../lib/PHPExcel/PHPExcel.php';

    // Se crea el objeto PHPExcel
    $objPHPExcel = new PHPExcel();

    // Se asignan las propiedades del libro
    $objPHPExcel->getProperties()->setCreator("Codedrinks") //Autor
        ->setLastModifiedBy("Codedrinks") //Ultimo usuario que lo modificó
        ->setTitle("Reporte Excel con PHP y MySQL")
        ->setSubject("Reporte Excel con PHP y MySQL")
        ->setDescription("Reporte de equipo")
        ->setKeywords("reporte equipo")
        ->setCategory("Reporte excel");

    $titulosColumnas = array('ID', 'EQUIPO', 'MARCA', 'MODELO', 'UBICACION', 'GUARDO');

    // Se agregan los titulos del reporte
    $objPHPExcel->setActiveSheetIndex(0)

        ->setCellValue('A1', $titulosColumnas[0])
        ->setCellValue('B1', $titulosColumnas[1])
        ->setCellValue('C1', $titulosColumnas[2])
        ->setCellValue('D1', $titulosColumnas[3])
        ->setCellValue('E1', $titulosColumnas[4])
        ->setCellValue('F1', $titulosColumnas[5]);

    //Se agregan los datos de los alumnos
    $i = 6;
    while ($fila = $resultado->fetch_array()) {
        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A' . $i, $fila['id_equipo'])
            ->setCellValue('B' . $i, $fila['equipo'])
            ->setCellValue('C' . $i, $fila['marca'])
            ->setCellValue('D' . $i, utf8_encode($fila['modelo']))
            ->setCellValue('E' . $i, $fila['ubicacion'])
            ->setCellValue('F' . $i, $fila['primer_nombre'] . " " . $fila['primer_apellido']);
        $i++;
    }

    $estiloTituloColumnas = array(
        'font'      => array(
            'name'  => 'Arial',
            'bold'  => true,
            'color' => array(
                'rgb' => 'FF431a5d',
            ),
        ),
        'fill'      => array(
            'type'       => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
            'rotation'   => 90,
            'startcolor' => array(
                'rgb' => 'FFFFFF',
            ),
            'endcolor'   => array(
                'argb' => 'FFFFFF',
            ),
        ),
        'borders'   => array(
            'top'    => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
                'color' => array(
                    'rgb' => '143860',
                ),
            ),
            'bottom' => array(
                'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
                'color' => array(
                    'rgb' => '143860',
                ),
            ),
        ),
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
            'wrap'       => true,
        ));

    $objPHPExcel->getActiveSheet()->getStyle('A1:F1')->applyFromArray($estiloTituloColumnas);

    for ($i = 'A'; $i <= 'F'; $i++) {
        $objPHPExcel->setActiveSheetIndex(0)
            ->getColumnDimension($i)->setAutoSize(true);
    }

    // Se asigna el nombre a la hoja
    $objPHPExcel->getActiveSheet()->setTitle('Equipo');

    // Se activa la hoja para que sea la que se muestre cuando el archivo se abre
    $objPHPExcel->setActiveSheetIndex(0);
    // Inmovilizar paneles
    //$objPHPExcel->getActiveSheet(0)->freezePane('A4');
    $objPHPExcel->getActiveSheet(0)->freezePaneByColumnAndRow(0, 5);

    // Se manda el archivo al navegador web, con el nombre que se indica (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Reporte_de_equipos.xlsx"');
    header('Cache-Control: max-age=0');

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;

} else {
    print_r('No hay datos para descargar');
}
