<?php
    require_once "./Users.php";
    require_once "./Apuestas.php";
    class rankings{

        function user_ranking($id_user){
            // $o_apuestas = apuestas();
            // $o_users = users();
            include('db.php');
            $query = "SELECT * FROM ranking WHERE id_user = $id_user";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                $fila_acierto = mysqli_fetch_row($result);
                $ganador_Acertado = $fila_acierto[1];
                $diferencia_Acertada = $fila_acierto[2];
                $marcador_Acertado = $fila_acierto[3];

                $query_nombres_apellidos = "SELECT nombres, apellidos FROM usuarios WHERE id = id_user";
                $result_nombres_apellidos = mysqli_query($conn, $query);
                $fila_nombres_apellidos = mysqli_fetch_row($result_nombres_apellidos);

                $nombres = $fila_nombres_apellidos[0];
                $apellidos = $fila_nombres_apellidos[1];

                $Pts = 3*$marcador_Acertado + 2*$diferencia_Acertada + 1*$diferencia_Acertada;

                $query_apuestas = "SELECT * FROM apuestas WHERE id_user = $id_user";
                $result_apuestas = mysqli_query($conn, $query_apuestas);
                $nro_apuestas = mysqli_num_rows($result_apuestas);

                // $nro_apuestas = '';

                return array($nombres, $apellidos, $nro_apuestas, $marcador_Acertado, $diferencia_Acertada, $ganador_Acertado, $Pts);
            }

            
            
        }

        function all_user_ranking(){
            $all_user_ranking = array();
            $query_id = "SELECT id FROM users";
            $result = mysqli_query($conn, $query_id);
            $nro_users = mysqli_num_rows($result);
            
            for($i=0;$i<$nro_users;$i++){
                array_push($all_user_ranking, user_ranking($i));
            }

            return $all_user_ranking;


        }
    }
?>