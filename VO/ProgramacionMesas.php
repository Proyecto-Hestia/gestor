<?php
    class Programacion{
        private $frm_id_prog_mes;
        private $frm_mesa_id;
        private $frm_mese_id;
        private $frm_tur_id;
        private $frm_fecha_ini;
        private $frm_fecha_fin;
        private $frm_est;
        
        public function Programacion(){
        }

        public function getfrm_id_prog_mes(){
            return $this->frm_id_prog_mes;
        }
        public function getfrm_mesa_id(){
            return $this->frm_mesa_id;
        }
        public function getfrm_mese_id(){
            return $this->frm_mese_id;
        }
        public function getfrm_tur_id(){
            return $this->frm_tur_id;
        }
        public function getfrm_fecha_ini(){
            return $this->frm_fecha_ini;
        }
        public function getfrm_fecha_fin(){
            return $this->frm_fecha_fin;
        }
        public function getfrm_est(){
            return $this->frm_est;
        }
        
        /*SET*/
        public function setfrm_id_prog_mes($valor){
            $this->frm_id_prog_mes = $valor;
        }
        public function setfrm_mesa_id($valor){
            $this->frm_mesa_id = $valor;
        }
        public function setfrm_mese_id($valor){
            $this->frm_mese_id = $valor;
        }
        public function setfrm_tur_id($valor){
            $this->frm_tur_id = $valor;
        }
        public function setfrm_fecha_ini($valor){
            $this->frm_fecha_ini = $valor;
        }
        public function setfrm_fecha_fin($valor){
            $this->frm_fecha_fin = $valor;
        }
        public function setfrm_est($valor){
            $this->frm_est = $valor;
        }
    }
?>