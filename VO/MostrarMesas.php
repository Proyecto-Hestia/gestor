<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM mesas JOIN zona ON mesas.zona_id = zona.id_zona";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarMesa\" onclick=\"EditarMesa('.$filas['id_mes'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarMesa('.$filas['id_mes'].')\"><i class=\"fa fa-trash\"></i></button>';
		$qr = '<button class=\"btn btn-dark\" data-toggle=\"modal\" data-target=\"#frmQr\" onclick=\"Qr('.$filas['id_mes'].')\">Qr</button>';
		
		$tabla.='{
			"ID":"'.$filas['id_mes'].'",
			"Zona":"'.$filas['id_zona'].'",
			"Capacidad":"'.$filas['cap_mes']." Personas".'",
            "Ubicacion":"'.$filas['nom_zona'].'",
			"Estado":"'.$filas['est_mes'].'",
			"Qr":"'.$qr.'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>