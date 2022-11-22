<?php
    require_once "./class/Users.php";
    require_once "./class/Apuestas.php";
    class rankings{

        function user_ranking($id_user){
            // $o_apuestas = apuestas();
            // $o_users = users();
            include('db.php');
            $query = "SELECT * FROM ranking WHERE id_user = '$id_user'";
            $result = mysqli_query($conn, $query);

            $query_nombres_apellidos = "SELECT nombres, apellidos FROM usuarios WHERE id = '$id_user'";
            $result_nombres_apellidos = mysqli_query($conn, $query_nombres_apellidos);
            $fila_nombres_apellidos = mysqli_fetch_row($result_nombres_apellidos);

            $nombres = $fila_nombres_apellidos[0];
            $apellidos = $fila_nombres_apellidos[1];
            if(mysqli_num_rows($result) > 0){
                // echo 'siuuu_no_ceros';
                $fila_acierto = mysqli_fetch_row($result);
                $ganador_Acertado = intval($fila_acierto[1]);
                $diferencia_Acertada = intval($fila_acierto[2]);
                $marcador_Acertado = intval($fila_acierto[3]);

                

                $Pts = 3*$marcador_Acertado + 2*$diferencia_Acertada + 1*$ganador_Acertado;
                
                $query_apuestas = "SELECT * FROM apuestas WHERE id_user = $id_user";
                $result_apuestas = mysqli_query($conn, $query_apuestas);
                $nro_apuestas = mysqli_num_rows($result_apuestas);

                // $nro_apuestas = '';

                return array($nombres, $apellidos, $nro_apuestas, $marcador_Acertado, $diferencia_Acertada, $ganador_Acertado, $Pts);
            }else{
                // echo 'siuuu_SI_ceros';
                // $fila_acierto = mysqli_fetch_row($result);
                // $ganador_Acertado = intval($fila_acierto[1]);
                // $diferencia_Acertada = intval($fila_acierto[2]);
                // $marcador_Acertado = intval($fila_acierto[3]);

                // $fila_acierto = mysqli_fetch_row($result);
                // $ganador_Acertado = intval($fila_acierto[1]);
                // $diferencia_Acertada = intval($fila_acierto[2]);
                // $marcador_Acertado = intval($fila_acierto[3]);

                $ganador_Acertado = 0;
                $diferencia_Acertada = 0;
                $marcador_Acertado = 0;
                $nro_apuestas = 0;
                $Pts = 3*$marcador_Acertado + 2*$diferencia_Acertada + 1*$ganador_Acertado;

                return array($nombres, $apellidos, $nro_apuestas, $marcador_Acertado, $diferencia_Acertada, $ganador_Acertado, $Pts); 
            }
            
            
              
        }

        function all_user_ranking(){
            include('db.php');
            $all_user_ranking = array();
            $query_id = "SELECT id FROM usuarios";
            $result = mysqli_query($conn, $query_id);
            $nro_users = mysqli_num_rows($result);
            $query_one_id = "SELECT id FROM usuarios";
            $resultado = mysqli_query($conn, $query_id);
            for($i=0;$i<$nro_users;$i++){
                
                // $resultado = mysqli_query($conn, $query_id);
                $fila = mysqli_fetch_row($resultado);
                // echo $fila[0];
                $ranking_one_user = self::user_ranking($fila[0]);
                array_push($all_user_ranking, $ranking_one_user);
            }
            for($i = 1; $i < count($all_user_ranking); $i++){
                
                for($j = 0; $j < count($all_user_ranking)-$i; $j++){
                    if($all_user_ranking[$j][6]<$all_user_ranking[$j+1][6]){
                        $aux = $all_user_ranking[$j];
                        $all_user_ranking[$j] = $all_user_ranking[$j+1];
                        $all_user_ranking[$j+1] = $aux; 
                    }
                }
                
            }
            
            // echo count($all_user_ranking);
            return $all_user_ranking;

        }
    }
?>