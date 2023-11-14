<?php 
    class categoriaRep{
        public static function categoria(){
            public static function crearCategoria($id,$nombre){
                $categoria=new Categoria($id,$nombre);
                return $categoria;
            }
        }

        public static function arrayCategoria($array){
            $arrayCategoria=array();
            foreach ($array as $objeto) {
                array_push($arrayCategoria,userRep::crearCategoria($objeto->IdCategoria,$objeto->Nombre));
            }
            return $arrayCategoria;
        }

        public static function cargarCategoria($conexion){
            echo "HOla";
            $categorias=databaseRep::selectUniversal($conexion,"Categoria");
            foreach ($categorias as $categoria) {
                echo "
                    <option value=".strtoupper($categoria->get_Nombre()).">".strtoupper($categoria->get_Nombre())."</option>
                ";
            }
        }
    }
?>