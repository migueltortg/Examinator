<?php 
    class intentoRep{
        public static function crearIntento($id,$idUser,$idExamen,$fecha_hora,$respuestas){
            $intento=new Intento($id,$idUser,$idExamen,$fecha_hora,$respuestas);
            return $intento;
        }
    
        public static function asignarIntento($conexion,$intento){
            //Funcion database insert intento
        }
    
        public static function arrayIntento($array){
            $arrayIntento=array();
            foreach ($array as $objeto) {
                array_push($arrayIntento,intentoRep::crearIntento($objeto->IdIntento,$objeto->IdUser,$objeto->IdExamen,$objeto->fecha_hora,$objeto->respuestas));
            }
            return $arrayIntento;
        }

        public static function cargarIntentos($conexion){
            $intentos=databaseRep::selectIntentoAsignado($conexion,loginRep::pedirValorSession("user")->get_Id());
            foreach ($intentos as $intento) {
                echo "
                <div class='intento'>
                    <div class='intento-title'>
                        <h2>Examen: ".$intento->get_Examen()."</h2>
                        <h4>Fecha: ".$intento->get_Fecha_hora()."</h4>
                    </div>
                    <div>
                        <h2>Nota: ".intentoRep::calcularNota($conexion,$intento->get_Respuestas())."</h2>
                    </div>
                </div>
                ";
            }
        }

        public static function calcularNota($conexion,$respuestas){
            $arrayRespuestas=json_decode($respuestas);
            $respuestasCorrectas=databaseRep::respuestasCorrectas($conexion,$arrayRespuestas);
            $puntos=0;
            $numRespuestas=0;
            for($i=0;$i<count($arrayRespuestas);$i++){
                if($arrayRespuestas[$i]->respuesta==$respuestasCorrectas[$i]){
                    $puntos=$puntos+1;
                }
                $numRespuestas=$numRespuestas+1;
            }

            return round((($puntos/$numRespuestas)*10),2);
        }
    }
?>