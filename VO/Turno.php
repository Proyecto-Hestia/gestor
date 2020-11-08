<?php
    class Turno{
        private $frm_id_tur;
        private $frm_id_nom_tur;
        private $frm_fechor_ini_tur;
        private $frm_fechor_fin_tur;
        
        public function Turno(){
        }

        public function getfrm_id_tur(){
            return $this->frm_id_tur;
        }
        public function getfrm_nom_tur(){
            return $this->frm_nom_tur;
        }
        public function getfrm_fechor_ini_tur(){
            return $this->frm_fechor_ini_tur;
        }
        public function getfrm_fechor_fin_tur(){
            return $this->frm_fechor_fin_tur;
        }
        
        /*SET*/
        public function setfrm_id_tur($valor){
            $this->frm_id_tur = $valor;
        }
        public function setfrm_nom_tur($valor){
            $this->frm_nom_tur = $valor;
        }
        public function setfrm_fechor_ini_tur($valor){
            $this->frm_fechor_ini_tur = $valor;
        }
        public function setfrm_fechor_fin_tur($valor){
            $this->frm_fechor_fin_tur = $valor;
        }
    }
?>