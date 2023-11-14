<?php 
    class examenRep{
        public static function crearExamen($idExamen,$fecha_creacion,$idCreador){
            $examen=new Examen($idExamen,$fecha_creacion,$idCreador);
            return $examen;
        }
    
        public static function introducirExamen($conexion,$idCreador){
            $examen=examenRep::crearExamen(null,null,$idCreador);
            databaseRep::añadirExamen($conexion,$examen);
        }
    
        public static function eliminarExamen($conexion,$examen){
            databaseRep::borrarExamenDB($conexion,$examen);
        }

        public static function modificarExamen($conexion,$id,$examen){
            databaseRep::modificarExamenDB($conexion,$id,$examen);
        }

        public static function arrayExamen($array){
            $arrayExamen=array();
            foreach ($array as $objeto) {
                array_push($arrayExamen,examenRep::crearExamen($objeto->IdExamen,$objeto->fecha_hora, $objeto->IdCreador));
            }
            return $arrayExamen;
        }

        public static function cargarExamenes($conexion){
            $examenes=databaseRep::selectExamenAsignado($conexion,loginRep::pedirValorSession("user")->get_Id());
            foreach ($examenes as $examen) {
                echo "
                <div class='exam'>
                    <div class='exam-title'>
                        <h2>".$examen->get_Id()."</h2>
                        <h4>".$examen->get_FechaCreacion()."</h4>
                    </div>
                    <div class='exam-btns'>
                        <input type='button' value='Hacerlo' id=".$examen->get_Id().">
                    </div>
                </div>
                ";
            }
        }

        public static function cargarExamen($conexion){
            $examenes = databaseRep::selectUniversal($conexion, "Examen");
        
            foreach ($examenes as $examen) {
                echo "
                <div class='examen' id=".$examen->get_Id().">
                    <div class='examen-title'>
                        <h2>".$examen->get_Id()."</h2>
                    </div>
                    <div class='borrarExamen-container'>
                        <button class='borrarExamen'>Borrar</button>
                    </div>
                    <div>
                        <h4>Id Creador: ".$examen->get_IdCreador()."</h4>
                    </div>
                    <div>
                        <h4>".$examen->get_FechaCreacion()."</h4>
                    </div>
                </div>";
            }
            echo "
            <script src='api/borrarExamen.js'></script>
            ";
        }
    }
?>