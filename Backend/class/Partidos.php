<?php
    require_once "./ConexionAPI.php";
    
    class partidos{

        function conectar_partidos(){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/match';
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));


            $res = curl_exec($ch);

            curl_close($ch);

            return $res;
        }

        function conectar_partido($id_partido){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/match/'.$id_partido;
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));



            $res = curl_exec($ch);

            curl_close($ch);

            return $res;

        }

        function conectar_partido_fecha($id_fecha){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/bymatch/'.$id_fecha;
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));



            $res = curl_exec($ch);

            curl_close($ch);

            return $res;

        }

        function resultado_partido($id_partido){
            $p = new partidos();
            $partido = $p -> conectar_partido($id_partido);
            
            $resultado = json_decode($partido, true);
            $data = $resultado['data'][0];
            $equipo_local = ($data)['home_team_en'];
            $equipo_visitante = ($data)['away_team_en'];
            $goles_local = ($data)['home_score'];
            $goles_visitante = ($data)['away_score'];

            $datos = array('id' => $id_partido, 'equipo_local' => $equipo_local,'equipo_visitante' => $equipo_visitante, 'goles_local'=> $goles_local, 'goles_visitante' => $goles_visitante);
            return $datos;
        }
    }
    // $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'));
    $object = new partidos();
    $res = $object->resultado_partido(3);
    echo gettype($res['equipo_visitante']);
?>