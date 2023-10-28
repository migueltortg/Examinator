<?php 
    class Respuesta{
        //Propiedades
        private $id;
        private $valor;
        private $enunciado;

        //Constructor
        public function __construct($id,$valor,$enunciado){
            $this->id = $id;
            $this->valor = $valor;
            $this->enunciado = $enunciado;
        }

        //Getters
        public function get_valor(){
            return $this->valor;
        }

        public function get_enunciado(){
            return $this->enunciado;
        }

        public function get_Id(){
            return $this->id;
        }
    }
?>