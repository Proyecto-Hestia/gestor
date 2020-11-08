<?php 
	class Mesa{ 
			private $frmtab_id;
			private $frmtab_zona_id; 
			private $frmcap_tab; 
            private $frmrol_id;
			private $frmubi; 
			private $frmqr;

		public function Mesa(){ 
		} 
		public function getfrmtab_id(){ 
			return $this->frmtab_id; 
		}
		public function getfrmtab_zona_id(){ 
			return $this->frmtab_zona_id; 
		}
		public function getfrmcap_tab(){ 
			return $this->frmcap_tab; 
		}
		public function getfrmestado(){ 
			return $this->frmestado; 
		} 
        public function getfrmubi(){ 
			return $this->frmubi; 
		} 
		public function getfrmqr(){ 
			return $this->frmqr; 
		} 
		/*SET*/ 
		public function setfrmtab_id($valor){ 
			$this->frmtab_id = $valor; 
		}
		public function setfrmtab_zona_id($valor){ 
			$this->frmtab_zona_id = $valor; 
		}  
		public function setfrmcap_tab($valor){ 
			$this->frmcap_tab = $valor; 
		}
		public function setfrmestado($valor){ 
			$this->frmestado = $valor; 
		} 
        public function setfrmubi($valor){ 
			$this->frmubi = $valor; 
		}
		public function setfrmqr($valor){ 
			$this->frmqr = $valor; 
		}

	} 
?>