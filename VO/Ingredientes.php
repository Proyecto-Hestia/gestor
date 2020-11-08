<?php 
	class Ingredientes{ 
			private $frming_id; 
			private $frming_nom; 
            private $frming_estado;
            private $frming_stock;
            private $frming_val; 

		public function Ingredientes(){ 
		} 
		public function getfrming_id(){ 
			return $this->frming_id; 
		}
		public function getfrming_nom(){ 
			return $this->frming_nom; 
		} 
		public function getfrming_estado(){ 
			return $this->frming_estado; 
        } 
        public function getfrming_stock(){ 
			return $this->frming_stock; 
        } 
        public function getfrming_val(){ 
			return $this->frming_val; 
		} 
		/*SET*/ 
		public function setfrming_id($valor){ 
			$this->frming_id = $valor; 
		} 
		public function setfrming_nom($valor){ 
			$this->frming_nom = $valor; 
		} 
		public function setfrming_estado($valor){ 
			$this->frming_estado = $valor; 
        } 
        public function setfrming_stock($valor){ 
			$this->frming_stock = $valor; 
        } 
        public function setfrming_val($valor){ 
			$this->frming_val = $valor; 
		} 

	} 
?>