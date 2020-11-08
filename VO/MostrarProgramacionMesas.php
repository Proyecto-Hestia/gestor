<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM programacion_mesas 
	JOIN zona ON programacion_mesas.zona_id = zona.id_zona 
	JOIN turnos ON programacion_mesas.tur_id = turnos.id_tur
	JOIN usuarios ON programacion_mesas.mese_id = usuarios.id_usu
	JOIN personal ON usuarios.id_per_usu = personal.id_per";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarProgramacionMesa\" onclick=\"EditarProgramacionMesa('.$filas['id_prog_mes'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarProgramacionMesa('.$filas['id_prog_mes'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"Codigo":"'.$filas['id_prog_mes'].'",
			"Codigo_mesa":"'.$filas['nom_zona'].'",
            "Codigo_mesero":"'.$filas['nom_per'].' '.$filas['ape_per'].'",
            "Codigo_turno":"'.$filas['nom_tur'].'",
			"Fecha_ini":"'.$filas['fecha_ini'].'",
			"Fecha_fin":"'.$filas['fecha_fin'].'",
			"Estado":"'.$filas['est_prog_mes'].'",
			"Acciones":"'.$editar.$eliminar.'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>