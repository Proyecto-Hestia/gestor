<?php 

	class DAOloginEmpleado{ 

		public function consultarEmpleado($id,$pass){
			$conexion = new Conexion();
			$sql = "SELECT * FROM usuarios WHERE id_usu = '$id' AND cla_usu = '$pass'";
			$conexion->buscar_query($sql);
			$validar=$conexion->ObtenerFilasAfectadas();
			if ($validar>0) {
				return 1;
			}else {
				$sql = "SELECT * FROM usuarios WHERE id_usu= '$id'";
				$conexion->buscar_query($sql);
				$validar=$conexion->ObtenerFilasAfectadas();
				echo "<script>alert($validar); </script>" ;
				if ($validar>0){
					return 2;
				}else {
					return 3;
				}
			}
		}

		public function user($id){
			$conexion = new Conexion();
			$sql = "SELECT * FROM usuarios WHERE id_usu = '$id'";
			$conexion->buscar_query($sql);
			$result2 = $conexion -> obtenerResult();
			return $result2;
		}

		//RECORDAR CLAVE
		public function RecordarClave($id){
			$conexion = new Conexion(); 
			$sql = "SELECT * FROM personal WHERE id_per = '$id'";
			$conexion->buscar_query($sql);
			$result = $conexion -> obtenerResult();
			//$filas = $conexion->ObtenerFilasAfectadas();
			return $result;
		}
		public function Recordar($id){
			$conexion = new Conexion(); 
			$sql = "SELECT * FROM usuarios WHERE id_usu = '$id'";
			$conexion->buscar_query($sql);
			$result2 = $conexion -> obtenerResult();
			return $result2;
		}
	}

?>