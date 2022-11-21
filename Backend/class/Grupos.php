<?php
    // require_once "./ConexionAPI.php";
    require_once($_SERVER['DOCUMENT_ROOT']."/Qatar2022/Backend/class/ConexionAPI.php");
    
    class grupos{

        function conectar_grupos(){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/standings';
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));


            
            $res = curl_exec($ch);

            curl_close($ch);

            return $res;
        }

        function conectar_grupo($grupo){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/standings/'.$grupo;
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));



            $res = curl_exec($ch);

            curl_close($ch);
            
            $datos_grupo = json_decode($res, true);
            return $datos_grupo;
        }

        function tabla_grupo($id_grupo){
            $equipos = array();
            $grupo = self::conectar_grupo($id_grupo);
            // echo 'siu';
            $a = $grupo['data'][0]['teams'];

            for($i = 0; $i < count($a); $i++){

                $Pais = $a[$i]['name_en'];
                $PJ = $a[$i]['mp'];
                $PG = $a[$i]['w'];
                $PE = $a[$i]['d'];
                $PP = $a[$i]['l'];
                $GF = $a[$i]['gf'];
                $GC = $a[$i]['ga'];
                $DG = $a[$i]['gd'];
                $Pts = $a[$i]['pts'];

                $equipo = array($Pais, $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $Pts);
                array_push($equipos, $equipo);
            }
            // echo 'siu';

            for($i = 1; $i < 4; $i++){
                for($j = 0; $j < 4-$i; $j++){
                    if($equipos[$j][8]<$equipos[$j+1][8]){
                        $aux = $equipos[$j];
                        $equipos[$j] = $equipos[$j+1];
                        $equipos[$j+1] = $aux; 
                    }
                }
                
            }

            return $equipos;
        }
        
        
    }
    
?>