<?php
    require_once "./class/Users.php";
    require_once "./class/Partidos.php";
    class apuestas{
        function realizar_apuesta($apuesta){
            include('db.php');
            $idUsuario = $_SESSION['iduser']; 
            
            $sql_validar = "SELECT id_partido from apuestas where id_user='$idUsuario'";
            $resultado_validar = mysqli_query($conn, $sql_validar);
            $nro_partido_apostados = mysqli_num_rows($resultado_validar);

            for ( $i= 0;  $i< $nro_partido_apostados; $i++) {
                $id_partido_validar = mysqli_fetch_row($resultado_validar);
                if($apuesta[0] == $id_partido_validar[0]){
                    return -1;
                }
            }
            

            date_default_timezone_set('America/Lima');
            $fechaActual = date('m/d/y H:i');
            $fecha_hora_actual = explode(' ', $fechaActual);
            // $fecha_partido_actual = $fecha_hora_actual[0];
            $fecha_actual = explode('/', $fecha_hora_actual[0]);
            $mes_actual = $fecha_actual[0];
            $dia_actual = $fecha_actual[1];

            // $hora = $fecha_hora[1];
            $horas_minutos_actual = explode(':', $fecha_hora_actual[1]);
            $horas_actual = $horas_minutos_actual[0];
            $minutos_actual = $horas_minutos_actual[1];
            $horas_actual = intval($horas_actual);
            $minutos_actual = intval($minutos_actual);


            $partido = new partidos();
            $datos_partido = $partido->conectar_partido($apuesta[0]);

            $fecha_hora_partido = explode(' ', $datos_partido['data'][0]['local_date']);
            $fecha_partido = explode('/', $fecha_hora_partido[0]);
            $mes_partido = $fecha_partido[0];
            $dia_partido = $fecha_partido[1];
            // $hora = $fecha_hora[1];
            $horas_minutos = explode(':', $fecha_hora_partido[1]);
            $horas_partido = $horas_minutos[0];
            $minutos_partido = $horas_minutos[1];
            $horas_partido = intval($horas_partido);
            $minutos_partido = intval($minutos_partido);

            $horas_partido = $horas_partido - 8;
            if($mes_actual<$mes_partido){
                $idUsuario = $_SESSION['iduser'];
                include('db.php');
                $query = "INSERT INTO apuestas(id_user, id_partido, goles_local, goles_visitante) VALUES ('$idUsuario', '$apuesta[0]', '$apuesta[1]', '$apuesta[2]')";
                return mysqli_query($conn, $query);
            }else if(($mes_actual==$mes_partido) && ($dia_actual < $dia_partido)){
                $idUsuario = $_SESSION['iduser'];
                include('db.php');
                $query = "INSERT INTO apuestas(id_user, id_partido, goles_local, goles_visitante) VALUES ('$idUsuario', '$apuesta[0]', '$apuesta[1]', '$apuesta[2]')";
                return mysqli_query($conn, $query);
            }else if(($mes_actual==$mes_partido) && ($dia_actual == $dia_partido) && ($horas_actual<23)){
                $idUsuario = $_SESSION['iduser'];
                include('db.php');
                $query = "INSERT INTO apuestas(id_user, id_partido, goles_local, goles_visitante) VALUES ('$idUsuario', '$apuesta[0]', '$apuesta[1]', '$apuesta[2]')";
                return mysqli_query($conn, $query);
            }else{
                return 0;
            }
            // $idUsuario = $_SESSION['iduser'];
            // include('db.php');
            // $query = "INSERT INTO apuestas(id_user, id_partido, goles_local, goles_visitante) VALUES ('$idUsuario', '$apuesta[0]', '$apuesta[1]', '$apuesta[2]')";
            // return mysqli_query($conn, $query);
            // $partido = new partidos();
            // $partido -> resultado_partido($id_partido);
        }
        function verificar_apuesta($idpartido){
            include('db.php');
            $idUsuario = $_SESSION['iduser']; 
            $query = "SELECT * FROM apuestas WHERE id_user = '$idUsuario' and id_partido = '$idpartido'";
            $result = mysqli_query($conn, $query);
            // if(!$result){
                // echo "siu";
            // }
            if(mysqli_num_rows($result) > 0){
                // echo "SIUU";
                $fila = mysqli_fetch_row($result);
                $id_apuesta = $fila[0];
                $id_partido = $fila[2];
                $goles_local_apostado = $fila[3];
                $goles_visitante_apostado = $fila[4];
                $verificado = $fila[6];
                // echo $verificado;
                if($verificado==1){
                    // echo "aaaaa ";
                    return 0;
                    
                }else if($verificado==0){
                    // echo "sisisii";

                    $partido = new partidos();
                    $resultados_partido = $partido -> resultado_partido($id_partido);

                    // $ganador_real = 0;
                    // $ganador_apostado = 0;
                    $goles_local_real = $resultados_partido['goles_local'];
                    // $goles_local_real = 2;
                    $goles_visitante_real = $resultados_partido['goles_visitante'];
                    // $goles_visitante_real = 0;

                    // $diferencia_goles_real = 0;
                    // $diferencia_goles_apostado = 0;

                    $apostado = self::ganador_y_diferencia_goles($goles_local_apostado, $goles_visitante_apostado);
                    $real = self::ganador_y_diferencia_goles($goles_local_real, $goles_visitante_real);


                    $marcador_Acertado = 0;
                    $diferencia_Acertada = 0;
                    $ganador_Acertado = 0;
                    
                    
                    if(($goles_local_apostado == $goles_local_real) && ($goles_visitante_apostado == $goles_visitante_real) ){
                        $marcador_Acertado = 1;
                    }else if($apostado[1] == $real[1]){
                        $diferencia_Acertada = 1;
                    }else if($apostado[0] == $real[0]){
                        $ganador_Acertado = 1;
                    }
                    
                    $query0 = "SELECT ganador_Acertado, diferencia_Acertada, marcador_Acertado FROM ranking WHERE id_user = '$idUsuario'";
                    $result0 = mysqli_query($conn, $query0);
                    
                    if(mysqli_num_rows($result0) > 0){
                        $fila = mysqli_fetch_row($result0);

                        $marcador_Acertado = $fila[2] + $marcador_Acertado;
                        $diferencia_Acertada = $fila[1] + $diferencia_Acertada;
                        $ganador_Acertado = $fila[0] + $ganador_Acertado;

                        $new_query = "UPDATE ranking SET ganador_Acertado='$ganador_Acertado', diferencia_Acertada='$diferencia_Acertada', marcador_Acertado='$marcador_Acertado' WHERE id_user= '$idUsuario'";
                        mysqli_query($conn, $new_query);
                        $verificado = 1;
                        $query_final = "UPDATE apuestas SET verificado='$verificado' WHERE id_user= '$idUsuario' and id_apuesta = '$id_apuesta'";
                        return mysqli_query($conn, $query_final);
                    }else{
                        
                        $query = "INSERT INTO ranking(id_user, ganador_Acertado, diferencia_Acertada, marcador_Acertado) VALUES ('$idUsuario', '$ganador_Acertado', '$diferencia_Acertada', '$marcador_Acertado')";
                        $query_sub_final = mysqli_query($conn, $query);
                        $verificado = 1;
                        $query_final = "UPDATE apuestas SET verificado='$verificado' WHERE id_user= '$idUsuario' and id_apuesta = '$id_apuesta'";
                        return mysqli_query($conn, $query_final);
                    }

                    

                }
            }else{
                return 3;

            }
            
            
            // return array('ganador_Acertado' => $ganador_Acertado, 'diferencia_Acertada' => $diferencia_Acertada, 'marcador_Acertado' => $marcador_Acertado);
            
        }
        
        function ganador_y_diferencia_goles($goles_local, $goles_visitante){
            // Si ganador es 1, ganó loca
            // Si ganador es 0, empate
            // Si ganador es -1, ganó visitante
            $ganador = 0;
            $diferencia_goles = 0;
            if($goles_local > $goles_visitante){
                $diferencia_goles = $goles_local - $goles_visitante;
                $ganador = 1;
            }else if($goles_local < $goles_visitante){
                $diferencia_goles = $goles_local - $goles_visitante;
                $ganador = -1;
            }else if($goles_local == $goles_visitante){
                $diferencia_goles = 0;
                $ganador = 0;
            }
            return array($ganador,$diferencia_goles);
        }

        function getApuestas(){
            $info_apuesta = array();
            // $historial = array();
            $idUsuario = $_SESSION['iduser'];
            include('db.php');
            $query0 = "SELECT id_partido FROM apuestas WHERE id_user = '$idUsuario'";
            $result0 = mysqli_query($conn, $query0);
            $nro_apuestas = mysqli_num_rows($result0);
            $partido = new partidos();
            if(mysqli_num_rows($result0) > 0){
                for($i=0;$i<$nro_apuestas;$i++){
                    $fila = mysqli_fetch_row($result0);
                    $data_partido = $partido->conectar_partido($fila[0]);

                    array_push($info_apuesta, array($fila[0], $data_partido['data'][0]["home_team_en"].' VS '.$data_partido['data'][0]["away_team_en"]));
                }
                return $info_apuesta;
                
            }else{
                return 0;
                // array_push($info_apuesta, array($fila[0], $fila[1], $fila[2], $fila[3]));
            }
        }


    }    
    
?>