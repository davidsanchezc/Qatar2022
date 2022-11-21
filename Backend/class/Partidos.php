<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/Qatar2022/Backend/class/ConexionAPI.php");
    
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
            
            $resultado =$partido;
            $data = $resultado['data'][0];
            $equipo_local = ($data)['home_team_en'];
            $equipo_visitante = ($data)['away_team_en'];
            $goles_local = ($data)['home_score'];
            $goles_visitante = ($data)['away_score'];
            
            $datos = array('id' => $id_partido, 'equipo_local' => $equipo_local,'equipo_visitante' => $equipo_visitante, 'goles_local'=> $goles_local, 'goles_visitante' => $goles_visitante);
            return $datos;
        }
        // id_partido, nombre de equipos, banderas, fecha_hora (d-m-a)24h 

        function encuentros($id_jornada){
            $encuentros_jornada = array();

            // $ids = self::get_id_partidos($id_jornada);

            $datos_partidos = self::conectar_partidos_jornada($id_jornada);
            $partidos =$datos_partidos['data'];
            $nro_partidos_jornada = count($partidos);
            for($i=0;$i<$nro_partidos_jornada;$i++){
                // $datos_encuentro = $partidos[$i];
                $id_partido = $partidos[$i]['id'];
                $equipo_local = $partidos[$i]['home_team_en'];
                $equipo_visitante = $partidos[$i]['away_team_en'];
                $bandera_local = $partidos[$i]['home_flag'];
                $bandera_visitante = $partidos[$i]['away_flag'];
                $fecha_hora_partido = explode(' ', $partidos[$i]['local_date']);
                $fecha_partido = explode('/', $fecha_hora_partido[0]);

                $new_fecha_partido = $dia = $fecha_partido[1].'/'.$dia = $fecha_partido[0].'/'.$fecha_partido[2];


                $horas_minutos = explode(':', $fecha_hora_partido[1]);
                $horas_partido = $horas_minutos[0];
                $minutos_partido = $horas_minutos[1];
                $horas_partido = intval($horas_partido);
                // $minutos_partido = intval($minutos_partido);
                
                $horas_partido = $horas_partido - 8;
                $horas_partido = strval($horas_partido);
                // 5:00
                $new_horas_minuto = $horas_partido.':'.$minutos_partido;

                $new_fecha_hora_partido = $new_fecha_partido.' '.$new_horas_minuto;
                $encuentro_jornada = array($id_partido, $equipo_local, $equipo_visitante, $bandera_local, $bandera_visitante, $new_fecha_hora_partido);
                
                array_push($encuentros_jornada, $encuentro_jornada);
            }
            // for($i= 0; $i < count($ids); $i++){
            //     $datos_encuentro = self::conectar_partido($ids[$i]);
            //     // echo 'a';
            //     $id_partido = $datos_encuentro['data'][0]['id'];
            //     $equipo_local = $datos_encuentro['data'][0]['home_team_en'];
            //     $equipo_visitante = $datos_encuentro['data'][0]['away_team_en'];
            //     $bandera_local = $datos_encuentro['data'][0]['home_flag'];
            //     $bandera_visitante = $datos_encuentro['data'][0]['away_flag'];

            //     $fecha_hora_partido = explode(' ', $datos_encuentro['data'][0]['local_date']);
            //     $fecha_partido = explode('/', $fecha_hora_partido[0]);
                
            //     $new_fecha_partido = $dia = $fecha_partido[1].'/'.$dia = $fecha_partido[0].'/'.$fecha_partido[2];


            //     $horas_minutos = explode(':', $fecha_hora_partido[1]);
            //     $horas_partido = $horas_minutos[0];
            //     $minutos_partido = $horas_minutos[1];
            //     $horas_partido = intval($horas_partido);
            //     // $minutos_partido = intval($minutos_partido);
                
            //     $horas_partido = $horas_partido - 8;
            //     $horas_partido = strval($horas_partido);
            //     // 5:00
            //     $new_horas_minuto = $horas_partido.':'.$minutos_partido;

            //     $new_fecha_hora_partido = $new_fecha_partido.' '.$new_horas_minuto;
            //     $encuentro_jornada = array($id_partido, $equipo_local, $equipo_visitante, $bandera_local, $bandera_visitante, $new_fecha_hora_partido);
                
            //     array_push($encuentros_jornada, $encuentro_jornada);
            // }
            return $encuentros_jornada;
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
    // $object = new partidos();
    // $res = $object->conectar_partidos_jornada(2);
    // $fecha_hora = explode(' ', $res['data'][0]['local_date']);
    // echo $fecha = $fecha_hora[0];
    // echo '<br>';
    // // echo gettype($fecha_hora[1]);
    // $horas_minutos = explode(':', $fecha_hora[1]);
    // echo intval($horas_minutos[0]);
    // echo  (intval($horas_minutos[1]));
    // date_default_timezone_set('America/Lima');
    // echo gettype(date('m/d/y H:i'));
    // echo json_encode($res);
    //EC VS QT 11/20/2022 19:00
    //Sen VS PB  11/21/2022 19:00
    //ING VS IRAN 11/21/2022 16:00
    // 11/21/2022 22:00
?>