<?php 
    class User {
        
        // Propiedades
        private $id;
        private $nombre;
        private $password;
        private $role;
      
        public function __construct($id,$nombre,$password,$role) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->password = $password;
            $this->role = $role;
        }

        // Getters y Setters
        function get_Id(){
            return $this->id;
        }

        function get_nombre() {
            return $this->nombre;
        }

        function get_password() {
            return $this->password;
        }

        function get_role() {
            return $this->role;
        }

        function set_nombre($nombre) {
            $this->nombre=$nombre;
        }

        function set_password($password) {
            $this->password=$password;
        }

        function set_role($role) {
            $this->role=$role;
        }

        //Funciones
        
    }
?>
