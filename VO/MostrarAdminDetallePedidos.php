<?php 
    $id = $_POST["id"];
    include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM detalle_pedido JOIN productos ON detalle_pedido.pro_id = productos.id_pro WHERE ped_id = '$id'";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();

	$tabla = "";
	while ($filas = $result->fetch()) {
		
		$tabla.='{
			"Nom_pro":"'.$filas['nom_pro'].'",
			"Comentarios":"'.$filas['com_det_ped'].'",
			"Sin_ingredientes":"'.$filas['sin_ing'].'",
			"Cantidad":"'.$filas['cant'].'",
			"Estado":"'.$filas['est_det_ped'].'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';
	

?>