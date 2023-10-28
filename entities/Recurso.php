<?php 
    class Recurso{
        //Propiedades
        private $existe;
        private $tipo_recurso;
        private $url;

        public function __construct($existe,$tipo_recurso,$url){
            $this->existe = $existe;
            $this->tipo_recurso = $tipo_recurso;
            $this->url = $url;
        }

        public function get_Existe(){
            return $this->existe;
        }

        public function get_Tipo_recurso(){
            return $this->tipo_recurso;
        }

        public function get_Url(){
            return $this->url;
        }

        public function set_Existe($existe){
            $this->existe = $existe;
        }

        public function set_Tipo_recurso($tipo_recurso){
            $this->tipo_recurso = $tipo_recurso;
        }

        public function set_Url($url){
            $this->url = $url;
        }
    }
?>