<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM usuarios"; 
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	
	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarUsuario\" onclick=\"EditarUsuario('.$filas['id_usu'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarUsuario('.$filas['id_usu'].')\"><i class=\"fa fa-trash\"></i></button>';
		
		$tabla.='{
			"Id":"'.$filas['id_usu'].'",
			"Rol":"'.$filas['rol_id'].'",
			"IdPersona":"'.$filas['id_per_usu'].'",
			"Estado":"'.$filas['est_usu'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>