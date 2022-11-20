<?php
    require_once "./ConexionAPI.php";
    
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

        function tabla_grupo($grupo){
            $equipos = array();
            $grupo = self::conectar_grupo($grupo);

            for($i = 0; $i < count($grupo['data'][0]['teams']); $i++){

                $Pais = $grupo['data'][0]['teams'][$i]['name_en'];
                $PJ = $grupo['data'][0]['teams'][$i]['mp'];
                $PG = $grupo['data'][0]['teams'][$i]['w'];
                $PE = $grupo['data'][0]['teams'][$i]['d'];
                $PP = $grupo['data'][0]['teams'][$i]['l'];
                $GF = $grupo['data'][0]['teams'][$i]['gf'];
                $GC = $grupo['data'][0]['teams'][$i]['ga'];
                $DG = $grupo['data'][0]['teams'][$i]['gd'];
                $Pts = $grupo['data'][0]['teams'][$i]['pts'];

                $equipo = array($Pais, $PJ, $PG, $PE, $PP, $GF, $GC, $DG, $Pts);
                array_push($equipos, $equipo);
            }

            return $equipos;
        }

        
    }
    // $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'));
    $object = new grupos();
    $res = $object->tabla_grupo('A');
    echo json_encode($res);
?>