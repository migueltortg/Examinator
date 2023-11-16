<?php 
    class Recurso{
        //Propiedades
        private $tipo_recurso;
        private $url;

        public function __construct($tipo_recurso,$url){
            $this->tipo_recurso = $tipo_recurso;
            $this->url = $url;
        }

        public function get_Tipo_recurso(){
            return $this->tipo_recurso;
        }

        public function get_Url(){
            return $this->url;
        }

        public function set_Tipo_recurso($tipo_recurso){
            $this->tipo_recurso = $tipo_recurso;
        }

        public function set_Url($url){
            $this->url = $url;
        }
    }
?>