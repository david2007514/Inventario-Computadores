<?php
//Archivo de conexión a la base de datos
include('conexion.php');
	
//Creamos las variables necesarias
$nombreP = $_POST['nombreP'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");

$nombreP = str_replace($caracteres_malos, $caracteres_buenos, $nombreP);

//Cambiamos los ENTER por <br>
$nombreP = nl2br($nombreP);

/*if(empty($nombreP)) {
	die( 'Es necesario un nombre' );
	//"Error 4" en los array de $_FILES significa que ningún archivo fue subido o incluido en el input
	
} elseif($_FILES['imagen']['error'] === 4) {
	die( 'Es necesario establecer una imagen' );
	//Si los inputs están seteados y el archivo no tiene errores, se procede
} else if(isset($nombreP) AND $_FILES['imagen']['error'] === 0 ) {*/

	//Convertimos la información de la imagen en binario para insertarla en la BBDD
	$imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

	//Nombre del archivo

	$nombreArchivo = $_FILES['imagen']['name'];
    
	//Extensiones permitidas
	$extensiones = array('jpg', 'jpeg', 'gif', 'png', 'bmp', 'ico');

	//Obtenemos la extensión (en minúsculas) para poder comparar
	//$extension = strtolower(end(explode('.', $nombreArchivo)));
	$nombreAr = explode(".", $nombreArchivo);
	$extension = (String) strtolower( end( $nombreAr));

	//Verificamos que sea una extensión permitida, si no lo es mostramos un mensaje de error
	if(!in_array($extension, $extensiones)) {?>

	<div class="alert" style="color: red">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php
		die( 'Sólo se permiten archivos con las siguientes extensiones: '.implode(', ', $extensiones) );
    ?>
    </div>
    <?php
	} else {
		//Si la extensión es correcta, procedemos a comprobar el tamaño del archivo subido
		//Y definimos el máximo que se puede subir
		//Por defecto el máximo es de 2 MB, pero se puede aumentar desde el .htaccess o en la directiva 'upload_max_filesize' en el php.ini

		$tamañoArchivo = $_FILES['imagen']['size']; //Obtenemos el tamaño del archivo en Bytes
		$tamañoArchivoKB = round(intval(strval( $tamañoArchivo / 1024 ))); //Pasamos el tamaño del archivo a KB

		$tamañoMaximoKB = "2048"; //Tamaño máximo expresado en KB
		$tamañoMaximoBytes = $tamañoMaximoKB * 1024; // -> 2097152 Bytes -> 2 MB

		//Comprobamos el tamaño del archivo, y mostramos un mensaje si es mayor al tamaño expresado en Bytes
		if($tamañoArchivo > $tamañoMaximoBytes) {?>

	<div class="alert" style="color: red">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php
			die( "El archivo ".$nombreArchivo." es demasiado grande. El tamaño máximo del archivo es de ".$tamañoMaximoKB."Kb." );
	?>
    </div>
    <?php
		} else {
			//Si el tamaño es correcto, subimos los datos
			$consulta = "UPDATE nombre_logo SET nombre = '".$nombreP."', logo = '".$imagenBinaria."'";

			//Hacemos la inserción, y si es correcta, se procede
			if(mysqli_query($con, $consulta)) {
				//Reiniciamos los inputs
				echo '<script>
            $("#enviarimagenes input,textarea").each(function(index) {
	        $(this).val("");
               });
            </script>';
				//Cerramos la conexión con MySQL
				mysqli_close($con);
				//Mostramos un mensaje
	?>

	<div class="alert" style="color: green">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php
				die( "El archivo de nombre ".$nombreArchivo." fue subido. Su peso es de ".$tamañoArchivoKB." KB.  " );
	?>
    </div>
    <?php
			} else {?>

	<div class="alert" style="color: red">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<?php
				//Si hay algún error con la inserción, se muestra un mensaje
				die( "Parece que ha habido un error. Recargue la página e inténtelo nuevamente." );
	?>
    </div>
    <?php
			};

		};//Fin condicional tamaño archivo

	};//Fin condicional extensiones

//};//Fin condicional para saber si todos los campos necesarios están completos
?>