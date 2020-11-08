<?php
    class PedidoDetalle{
        private $frmid_det_ped;
        private $frmped_id;
        private $frmpro_id;
        private $frmcom_det_ped;
        private $frmsin_ing;
        private $frmcant;
        private $frmest_det_ped;
        private $frmcal_ped;
        
        public function PedidoDetalle(){
        }

        public function getfrmid_det_ped(){
            return $this->frmid_det_ped;
        }
        public function getfrmped_id(){
            return $this->frmped_id;
        }
        public function getfrmpro_id(){
            return $this->frmpro_id;
        }
        public function getfrmcom_det_ped(){
            return $this->frmcom_det_ped;
        }
        public function getfrmsin_ing(){
            return $this->frmsin_ing;
        }
        public function getfrmcant(){
            return $this->frmcant;
        }
        public function getfrmest_det_ped(){
            return $this->frmest_det_ped;
        }
        public function getfrmcal_ped(){
            return $this->frmcal_ped;
        }
        
        /*SET*/
        public function setfrmid_det_ped($valor){
            $this->frmid_det_ped = $valor;
        }
        public function setfrmped_id($valor){
            $this->frmped_id = $valor;
        }
        public function setfrmpro_id($valor){
            $this->frmpro_id = $valor;
        }
        public function setfrmcom_det_ped($valor){
            $this->frmcom_det_ped = $valor;
        }
        public function setfrmsin_ing($valor){
            $this->frmsin_ing = $valor;
        }
        public function setfrmcant($valor){
            $this->frmcant = $valor;
        }
        public function setfrmest_det_ped($valor){
            $this->frmest_det_ped = $valor;
        }
        public function setfrmcal_ped($valor){
            $this->frmcal_ped = $valor;
        }
        
    }
?>