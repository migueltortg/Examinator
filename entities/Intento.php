<?php 
    class Intento{
        private $idIntento;
        private $usuario;
        private $examen;
        private $fecha_hora;
        private $respuestas;

        public function __construct($idIntento,$usuario,$examen,$fecha_hora,$respuestas){
            $this->idIntento = $idIntento;
            $this->usuario = $usuario;
            $this->examen = $examen;
            $this->fecha_hora = $fecha_hora;
            $this->respuestas = $respuestas;
        }

        public function get_IdIntento(){
            return $this->idIntento;
        }

        public function get_Usuario(){
            return $this->usuario;
        }

        public function get_Examen(){
            return $this->examen;
        }

        public function get_Fecha_hora(){
            return $this->fecha_hora;
        }

        public function get_Respuestas(){
            return $this->respuestas;
        }
    }
?>