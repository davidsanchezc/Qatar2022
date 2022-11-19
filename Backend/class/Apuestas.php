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
            $idUsuario = $_SESSION['iduser'];
            include('db.php');
            $query = "INSERT INTO apuestas(id_user, id_partido, goles_local, goles_visitante) VALUES ('$idUsuario', '$apuesta[0]', '$apuesta[1]', '$apuesta[2]')";
            return mysqli_query($conn, $query);
            // $partido = new partidos();
            // $partido -> resultado_partido($id_partido);
            
        }
        function verificar_apuesta($datos){
            include('db.php');
            $idUsuario = $_SESSION['iduser']; 
            $query = "SELECT * FROM apuestas WHERE id_user = $idUsuario and id_partido = $datos[0] ";
            $result = mysqli_query($conn, $query);

            $fila = mysqli_fetch_row($result);

            $id_partido = $fila[2];
            $goles_local_apostado = $fila[3];
            $goles_visitante_apostado = $fila[4];

            $partido = new partidos();
            $resultados_partido = $partido -> resultado_partido($id_partido);

            $ganador_real = 0;
            $
            $goles_local_real = $resultados_partido['goles_local'];
            $goles_visitante_real = $resultados_partido['goles_visitante'];

            if($goles_local_real > $goles_visitante_real){
                $diferencia_goles_real = $goles_local_real - $goles_visitante_real;
                $ganador_real = 1;
            }else if($goles_local_real < $goles_visitante_real){
                $diferencia_goles_real = $goles_visitante_real - $goles_local_real;
                $ganador_real = -1;
            }else if($goles_local_real == $goles_visitante_real){
                $diferencia_goles_real = 0;
                $ganador_real = 0;
            }


        }
    }    
    
?>