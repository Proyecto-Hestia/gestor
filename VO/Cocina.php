<?php
    class Cocina{
        private $frm_id_ped;
        private $frm_id_det_ped;
        private $frm_fechor_ini_ped;
        private $frm_fechor_fin_ped;
        private $frm_com_det_ped;
        private $frm_sin_ing;
        private $frm_cant;
        private $frm_est_ped;
        
        public function Cocina(){
        }

        public function getfrm_id_ped(){
            return $this->frm_id_ped;
        }
        public function getfrm_id_det_ped(){
            return $this->frm_id_det_ped;
        }
        public function getfrm_fechor_ini_ped(){
            return $this->frm_fechor_ini_ped;
        }
        public function getfrm_fechor_fin_ped(){
            return $this->frm_fechor_fin_ped;
        }
        public function getfrm_com_det_ped(){
            return $this->frm_com_det_ped;
        }
        public function getfrm_sin_ing(){
            return $this->frm_sin_ing;
        }
        public function getfrm_cant(){
            return $this->frm_cant;
        }
        public function getfrm_est_ped(){
            return $this->frm_est_ped;
        }
          
        
        /*SET*/
        public function setfrm_id_ped($valor){
            $this->frm_id_ped = $valor;
        }
        public function setfrm_id_det_ped($valor){
            $this->frm_id_det_ped = $valor;
        }
        public function setfrm_fechor_ini_ped($valor){
            $this->frm_fechor_ini_ped = $valor;
        }
        public function setfrm_fechor_fin_ped($valor){
            $this->frm_fechor_fin_ped = $valor;
        }
        public function setfrm_com_det_ped($valor){
            $this->frm_com_det_ped = $valor;
        }
        public function setfrm_sin_ing($valor){
            $this->frm_sin_ing = $valor;
        }
        public function setfrm_cant($valor){
            $this->frm_cant = $valor;
        }
        public function setfrm_est_ped($valor){
            $this->frm_est_ped = $valor;
        }
        
    }
?>