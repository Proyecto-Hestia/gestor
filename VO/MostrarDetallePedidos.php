<?php 
    $id = $_POST["id"];
    include ("Conexion.php");
	$conexion = new Conexion();
	$sql = "SELECT * FROM detalle_pedido JOIN productos ON detalle_pedido.pro_id = productos.id_pro WHERE ped_id = '$id' AND est_det_ped = 'Preparacion' OR est_det_ped = 'Pendiente'";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$filasAfectadas = $conexion->ObtenerFilasAfectadas();
	if ($filasAfectadas > 0) {
		$tabla = "";
	while ($filas = $result->fetch()) {
		if ($filas['est_det_ped'] == "Preparacion") {
			$accionUno = '';
			$accionDos = '<button class=\"btn btn-danger\" onclick=\"Despachado('.$filas['id_det_ped'].','.$filas['ped_id'].')\"><i class=\"fa fa-check\"></i></button>';

		} else {
			if ($filas['est_det_ped'] == "Despachado") {
				$accionUno = '';
				$accionDos = '';
			} else {
				$accionUno = '<button class=\"btn btn-cyan\" onclick=\"Preparacion('.$filas['id_det_ped'].','.$filas['ped_id'].')\"><i class=\"fa fa-sign-language\"></i></button>';
				$accionDos = '<button class=\"btn btn-danger\" onclick=\"Cancelado('.$filas['id_det_ped'].','.$filas['ped_id'].')\"><i class=\"fa fa-times\"></i></button>';
			}
		}
		
		$tabla.='{
			"Nom_pro":"'.$filas['nom_pro'].'",
			"Comentarios":"'.$filas['com_det_ped'].'",
			"Sin_ingredientes":"'.$filas['sin_ing'].'",
			"Cantidad":"'.$filas['cant'].'",
			"Estado":"'.$filas['est_det_ped'].'",
			"Acciones":"'.$accionUno.$accionDos.'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
		echo '{"data":['.$tabla.']}';
	} else {
		ini_set('date.timezone', 'America/Bogota');
        $fechor = date('Y-m-d H:i:s', time());
        $sql2 = "UPDATE pedidos SET est_ped =  'Entregado', fechor_fin_ped = '$fechor' WHERE id_ped = '$id'"; 
		$conexion->buscar_query($sql2);
		$sql3 = "SELECT * FROM detalle_pedido JOIN productos ON detalle_pedido.pro_id = productos.id_pro WHERE ped_id = '$id' AND est_det_ped = 'Preparacion' OR est_det_ped = 'Pendiente'";
		$conexion->buscar_query($sql3);
		$result2 = $conexion->obtenerResult();
		$tabla = "";
		while ($filas2 = $result2->fetch()) {
		$tabla.='{
			"Nom_pro":"",
			"Comentarios":"",
			"Sin_ingredientes":"",
			"Cantidad":"",
			"Estado":"",
			"Acciones":""
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
		echo '{"data":['.$tabla.']}';
	}

?>