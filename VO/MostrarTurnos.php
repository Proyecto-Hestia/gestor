<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM turnos";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarTurno\" onclick=\"EditarTurno('.$filas['id_tur'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarTurno('.$filas['id_tur'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"Codigo":"'.$filas['id_tur'].'",
			"Nombre":"'.$filas['nom_tur'].'",
            "Hora_inicio":"'.$filas['hor_ini_tur'].'",
			"Hora_fin":"'.$filas['hor_fin_tur'].'",
			"Acciones":"'.$editar.$eliminar.'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>