<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM cliente"; 
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();
	
	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarCliente\" onclick=\"EditarCliente('.$filas['id_cli'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarCliente('.$filas['id_cli'].')\"><i class=\"fa fa-trash\"></i></button>';
		
		$tabla.='{
			"id":"'.$filas['id_cli'].'",
			"nombre":"'.$filas['nom_cli'].'",
			"apellido":"'.$filas['ape_cli'].'",
			"telefono":"'.$filas['tel_cli'].'",
			"celular":"'.$filas['cel_cli'].'",
			"correo":"'.$filas['mail_cli'].'",
			"direccion":"'.$filas['dir_cli'].'",
			"estado":"'.$filas['est_cli'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>