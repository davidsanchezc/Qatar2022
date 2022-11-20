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
            $token = $c -> conexion();            // print $token;
            $url = 'http://api.cup2022.ir/api/v1/match/'.$id_partido;
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));


            $res = curl_exec($ch);

            curl_close($ch);
            
            $datos_partido = json_decode($res, true);
            return ($datos_partido);
        
        }

        function conectar_partidos_jornada($id_jornada){
            $c = new conectar();
            $token = $c -> conexion();

            $url = 'http://api.cup2022.ir/api/v1/bymatch/'.$id_jornada;
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));


            $res = curl_exec($ch);

            curl_close($ch);
            $datos_partido = json_decode($res, true);
            return ($datos_partido);

            // dar id_partido _bandera _nombre_
        }

        function resultado_partido($id_partido){
            // $p = new partidos();
            $partido = self::conectar_partido($id_partido);
            
            $resultado = json_decode($partido, true);
            $data = $resultado['data'][0];
            $equipo_local = ($data)['home_team_en'];
            $equipo_visitante = ($data)['away_team_en'];
            $goles_local = ($data)['home_score'];
            $goles_visitante = ($data)['away_score'];
            
            $datos = array('id' => $id_partido, 'equipo_local' => $equipo_local,'equipo_visitante' => $equipo_visitante, 'goles_local'=> $goles_local, 'goles_visitante' => $goles_visitante);
            return $datos;
        }

        function get_id_partidos($id_jornada){
            $ids = array();
            $datos_partidos = self::conectar_partidos_jornada($id_jornada);
    
            for($i = 0; $i < count($datos_partidos['data']); $i++){
                array_push($ids, $datos_partidos['data'][$i]['id']);
            }
    
            return $ids;
        }

        // function hora_partido($id_partido){

        // }
    }
    // $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'));
    $object = new partidos();
    $res = $object->conectar_partido(3);
    $fecha_hora = explode(' ', $res['data'][0]['local_date']);
    echo $fecha = $fecha_hora[0];
    echo '<br>';
    // echo gettype($fecha_hora[1]);
    $horas_minutos = explode(':', $fecha_hora[1]);
    echo intval($horas_minutos[0]);
    echo  (intval($horas_minutos[1]));
    date_default_timezone_set('America/Lima');
    echo gettype(date('m/d/y H:i'));
    
    //EC VS QT 11/20/2022 19:00
    //Sen VS PB  11/21/2022 19:00
    //ING VS IRAN 11/21/2022 16:00
    // 11/21/2022 22:00
?>