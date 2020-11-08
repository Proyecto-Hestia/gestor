<?php 
	class IngrexPro{ 
			private $frmip_id; 
			private $frmip_idpro; 
            private $frmip_iding;
			private $frmip_cant;
			private $frmip_med;

		public function IngrexPro(){ 
		} 
		public function getfrmip_id(){ 
			return $this->frmip_id; 
		}
		public function getfrmip_idpro(){ 
			return $this->frmip_idpro; 
		} 
		public function getfrmip_iding(){ 
			return $this->frmip_iding; 
        } 
        public function getfrmip_cant(){ 
			return $this->frmip_cant; 
		}
		public function getfrmip_med(){ 
			return $this->frmip_med; 
        }

		/*SET*/ 
		public function setfrmip_id($valor){ 
			$this->frmip_id = $valor; 
		} 
		public function setfrmip_idpro($valor){ 
			$this->frmip_idpro = $valor; 
		} 
		public function setfrmip_iding($valor){ 
			$this->frmip_iding = $valor; 
        } 
        public function setfrmip_cant($valor){ 
			$this->frmip_cant = $valor; 
		} 
		public function setfrmip_med($valor){ 
			$this->frmip_med = $valor; 
        } 

	} 
?>