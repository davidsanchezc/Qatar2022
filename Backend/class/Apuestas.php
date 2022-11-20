<?php
    require_once "../../class/Users.php";
    require_once "./Partidos.php";
    class apuestas{
        function realizar_apuesta($apuesta){
            // $id_partido = $apuesta[0];
            // $id_local = $apuesta[1];
            // $id_visitante = $apuesta[2];
            // $goles_local = $apuesta[3];
            // $goles_visitante = $apuesta[4];
            date_default_timezone_set('America/Lima');
            $fechaActual = date('m/d/y H:i');
            $fecha_hora_actual = explode(' ', $fechaActual);
            $fecha_partido = $fecha_hora_actual[0];
            // $hora = $fecha_hora[1];
            $horas_minutos_actual = explode(':', $fecha_hora_actual[1]);
            $horas_actual = $horas_minutos_actual[0];
            $minutos_actual = $horas_minutos_actual[1];
            $horas_actual = intval($horas_actual);
            $minutos_actual = intval($minutos_actual);


            $partido = new partidos();
            $datos_partido = $partido->conectar_partido($apuesta[0]);

            $fecha_hora_partido = explode(' ', $datos_partido['data'][0]['local_date']);
            $fecha_partido = $fecha_hora[0];
            // $hora = $fecha_hora[1];
            $horas_minutos = explode(':', $fecha_hora[1]);
            $horas_partido = $horas_minutos[0];
            $minutos_partido = $horas_minutos[1];
            $horas_partido = intval($horas);
            $minutos_partido = intval($minutos);

            $horas = $horas - 8;

            if($horas_actual<$horas_partido){
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
        function verificar_apuesta($datos){
            include('db.php');
            $idUsuario = $_SESSION['iduser']; 
            $query = "SELECT * FROM apuestas WHERE id_user = $idUsuario and id_partido = $datos[0]";
            $result = mysqli_query($conn, $query);
            
            $fila = mysqli_fetch_row($result);

            $id_partido = $fila[2];
            $goles_local_apostado = $fila[3];
            $goles_visitante_apostado = $fila[4];

            $partido = new partidos();
            $resultados_partido = $partido -> resultado_partido($id_partido);

            // $ganador_real = 0;
            // $ganador_apostado = 0;
            $goles_local_real = $resultados_partido['goles_local'];
            $goles_visitante_real = $resultados_partido['goles_visitante'];
            $diferencia_goles_real = 0;
            $diferencia_goles_apostado = 0;

            $apostado = self::ganador_y_diferencia_goles($goles_local_apostado, $goles_visitante_apostado);
            $real = self::ganador_y_diferencia_goles($goles_local_real, $goles_visitante_real);


            $marcador_Acertado = 0;
            $diferencia_Acertada = 0;
            $ganador_Acertado = 0;
            if($apostado[0] == $real[0]){
                $ganador_Acertado = 1;
            }
            if($apostado[1] == $real[1]){
                $diferencia_Acertada = 1;
            }
            if(($goles_local_apostado == $goles_local_real) && ($goles_visitante_apostado == $goles_visitante_real) ){
                $marcador_Acertado = 1;
            }

            return array('ganador_Acertado' => $ganador_Acertado, 'diferencia_Acertada' => $diferencia_Acertada, 'marcador_Acertado' => $marcador_Acertado);
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
                $diferencia_goles = $goles_visitante - $goles_local;
                $ganador = -1;
            }else if($goles_local == $goles_visitante){
                $diferencia_goles = 0;
                $ganador = 0;
            }
            return array($ganador,$diferencia_goles);
        }


    }    
    
?>