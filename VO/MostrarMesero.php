<?php 
	include ("Conexion.php");
	$conexion = new Conexion();
    $sql = "SELECT * FROM pedidos JOIN mesas ON pedidos.mes_id = mesas.id_mes 
            JOIN zona ON mesas.zona_id = zona.id_zona
            WHERE est_ped = 'Preparacion' or est_ped = 'Pendiente'";
	$conexion->buscar_query($sql);
	$result = $conexion->obtenerResult();
	$tabla = "";
	while ($filas = $result->fetch()) {
		$detalle = '<button class=\"btn btn-default\" onclick=\"MostrarDetallePedidos('.$filas['id_ped'].')\"><i class=\"fa fa-plus\"></i></button>';
		
		$tabla.='{
			"Detalle":"'.$detalle.'",
			"Estado":"'.$filas['est_ped'].'",
			"Id_ped":"'.$filas['id_ped'].'",
			"Id_mes":"'.$filas['mes_id'].'",
            "Fechor_ini":"'.$filas['fechor_ini_ped'].'",
            "Zona":"'.$filas['nom_zona'].'"
        },';
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';

?>