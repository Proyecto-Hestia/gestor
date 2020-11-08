<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM ingredientes";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filas = $conexion->ObtenerFilasAfectadas();

	$tabla = "";
	while ($filas = $result->fetch()) {
		$editar = '<button class=\"btn btn-cyan\" data-toggle=\"modal\" data-target=\"#frmEditarIngrediente\" onclick=\"EditarIngrediente('.$filas['id_ing'].')\"><i class=\"fa fa-edit\"></i></button>';
		$eliminar = '<button class=\"btn btn-danger\" onclick=\"EliminarIngrediente('.$filas['id_ing'].')\"><i class=\"fa fa-trash\"></i></button>';

		$tabla.='{
			"ID":"'.$filas['id_ing'].'",
			"Nom":"'.$filas['nom_ing'].'",
            "Estado":"'.$filas['est_ing'].'",
            "Stock":"'.$filas['stock_ing'].'",
            "Val":"'.$filas['val_ing'].'",
			"Editar":"'.$editar.'",
			"Eliminar":"'.$eliminar.'"
		},';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>