<?php
    class Clientes{
        private $frmcli_id;
        private $frmcli_nom;
        private $frmcli_ape;
        private $frmcli_tel;
        private $frmcli_cel;
        private $frmcli_mail;
        private $frmcli_dir;
        private $frmcli_est;
        
        public function Cliente(){
        }

        public function get_id(){
            return $this->frmcli_id;
        }
        public function get_nom(){
            return $this->frmcli_nom;
        }
        public function get_ape(){
            return $this->frmcli_ape;
        }
        public function get_tel(){
            return $this->frmcli_tel;
        }
        public function get_cel(){
            return $this->frmcli_cel;
        }
        public function get_mail(){
            return $this->frmcli_mail;
        }
        public function get_dir(){
            return $this->frmcli_dir;
        }
        public function get_est(){
            return $this->frmcli_est;
        }
        
        
        
        /*SET*/
        public function set_id($valor){
            $this->frmcli_id = $valor;
        }
        public function set_nom($valor){
            $this->frmcli_nom = $valor;
        }
        public function set_ape($valor){
            $this->frmcli_ape = $valor;
        }
        public function set_tel($valor){
            $this->frmcli_tel = $valor;
        }
        public function set_cel($valor){
            $this->frmcli_cel = $valor;
        }
        public function set_mail($valor){
            $this->frmcli_mail = $valor;
        }
        public function set_dir($valor){
            $this->frmcli_dir = $valor;
        }
        public function set_est($valor){
            $this->frmcli_est = $valor;
        } 
    }
?>