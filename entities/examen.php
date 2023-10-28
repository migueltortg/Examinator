<?php 
    class Examen {
        // Propiedades
        private $id;
        private $fechaCreacion;
        private $idCreador;

        //Constructor
        public function __construct($id,$fechaCreacion,$idCreador) {
            $this->id = $id;
            $this->fechaCreacion = $fechaCreacion;
            $this->idCreador = $idCreador;
        }

        // Getters y Setters
        public function get_Id(){
            return $this->id;
        }

        public function get_FechaCreacion(){
            return $this->fechaCreacion;
        }

        public function get_IdCreador(){
            return $this->idCreador;
        }

        //Funciones
        
    }
?>