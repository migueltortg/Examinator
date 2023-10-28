<?php 
    class Dificultad{
        private $id;
        private $nombre;

        public function __construct($id,$nombre){
            $this->id = $id;
            $this->nombre = $nombre;
        }

        public function get_Id(){
            return $this->id;
        }

        public function get_Nombre(){
            return $this->nombre;
        }

        public function set_Nombre($nombre){
            $this->nombre = $nombre;
        }

    }
?>