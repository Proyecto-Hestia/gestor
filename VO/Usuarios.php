<?php 
	class Usuario{ 
			private $id_usu; 
			private $rol_id;
			private $id_per_usu;
			private $cla_usu;
			private $est_usu;

		public function Usuario(){ 
		} 
		public function get_id(){ 
			return $this->id_usu; 
		}
		public function get_rol(){ 
			return $this->rol_id; 
		}
		public function get_id_per(){ 
			return $this->id_per_usu; 
		}
		public function get_cla(){ 
			return $this->cla_usu; 
		}
		public function get_est(){ 
			return $this->est_usu; 
		}
		 
		/*SET*/ 
		public function set_id($valor){ 
			$this->id_usu = $valor; 
		} 
		public function set_rol($valor){ 
			$this->rol_id = $valor; 
		}
		public function set_id_per($valor){ 
			$this->id_per_usu = $valor; 
		}
		public function set_cla($valor){ 
			$this->cla_usu = $valor; 
		}
		public function set_est($valor){ 
			$this->est_usu = $valor; 
		}
	} 
?>