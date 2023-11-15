<?php 
    class Pregunta implements JsonSerializable{
        // Propiedades
        private $id;
        private $enunciado;
        private $respuestas=array();
        private $categoria;
        private $dificultad;
        private $recurso;

        //Constructor
        public function __construct($id,$enunciado,$categoria,$dificultad,$recurso) {
            $this->id = $id;
            $this->enunciado = $enunciado;
            $this->categoria = $categoria;
            $this->dificultad = $dificultad;
            $this->recurso = $recurso;
        }

        // Getters y Setters
        public function get_Id() { 
            return $this->id; 
        }

        public function get_Enunciado() {
            return $this->enunciado; 
        }

        public function get_RespuestasJSON() { 
            return json_encode($this->respuestas); 
        }

        public function get_RespuestasObj(){
            return $this->respuestas;
        }

        public function get_Categoria() { 
            return $this->categoria; 
        }

        public function set_Categoria($categoria) {
            $this->categoria = $categoria;
        }

        public function get_Dificultad() { 
            return $this->dificultad; 
        }

        public function set_Dificultad($dificultad) {
            $this->dificultad = $dificultad;
        }

        public function get_recurso() { 
            return $this->recurso; 
        }

        public function set_recurso($recurso) {
            $this->recurso = $recurso;
        }

        public function set_Respuestas($respuestas) {
            array_push($this->respuestas,$respuestas);
        }

        public function eliminarRespuesta($respuesta){
            unset($this->respuestas[$respuesta->get_Id()-1]);
        }

        public function jsonSerialize(){
            $vars = get_object_vars($this);
            return $vars;
        }
    }
?>