<?php 
    class Respuesta implements JsonSerializable{
        //Propiedades
        private $IdRespuesta;
        private $ValorRespuesta;
        private $Enunciado;
        private $Correcta;

        //Constructor
        public function __construct($IdRespuesta,$ValorRespuesta,$Enunciado,$Correcta){
            $this->IdRespuesta = $IdRespuesta;
            $this->ValorRespuesta = $ValorRespuesta;
            $this->Enunciado = $Enunciado;
            $this->Correcta= $Correcta;
        }

        //Getters
        public function get_valor(){
            return $this->ValorRespuesta;
        }

        public function get_correcta(){
            return $this->Correcta;
        }

        public function get_enunciado(){
            return $this->Enunciado;
        }

        public function get_Id(){
            return $this->IdRespuesta;
        }

        public function jsonSerialize(){
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>