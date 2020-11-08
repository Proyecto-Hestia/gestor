<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM detalle_ingredientesxproducto";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarIngrexpro\" onclick=\"EditarIngrexpro('.$filas['id_det_ingxpro'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarIngrexpro('.$filas['id_det_ingxpro'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"ID":"'.$filas['id_det_ingxpro'].'",
			"id_pro":"'.$filas['pro_id'].'",
            "id_ing":"'.$filas['ing_id'].'",
			"Stock":"'.$filas['cant_ingxpro'].'",
			"Medida":"'.$filas['uni_medida'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>