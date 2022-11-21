<?php
    session_start();
    require_once "./class/Partidos.php";
    require_once "./class/Apuestas.php";
    // echo 'f';
    date_default_timezone_set('America/Lima');
    $fechaActual = date('d/m/y H:i');
    $fecha_hora_actual = explode(' ', $fechaActual);
    
    $dia_mes_año = explode('/', $fecha_hora_actual[0]);
    // echo $fecha_hora_actual[0];
    // $fecha_limite = date_create_from_format('d/m/y H:i',$dia_mes_año[0]."/".$dia_mes_año[1]."/".$dia_mes_año[2].' '.'04:00');
    // $dia_mes_año = explode('/', $fecha_hora_actual[0]);
    $dia = intval($dia_mes_año[0]);
    $mes = intval($dia_mes_año[1]);
    $año = intval($dia_mes_año[2]);
    $horas_minutos = explode(':', $fecha_hora_actual[1]);
    $horas = intval($horas_minutos[0]);
    $minutos = intval($horas_minutos[1]);

    $id_jornada = 0;
    
    if($mes == 11){
        $id_jornada = $dia - 19;
    }else if($mes == 12){
        $id_jornada = $dia +11;
    }
    // echo $minutos;
    // echo 'f';
    if($horas = 19 && $minutos>=0 && $minutos<=5){
        if($mes == 11){
            $id_jornada = $dia - 19;
        }else if($mes == 12){
            if($dia<7){
                $id_jornada = $dia + 11;
            }else{
                switch($dia){
                    case 9:
                        $id_jornada = 18;
                        break;
                    case 10:
                        $id_jornada = 19;
                        break;
                    case 13:
                        $id_jornada = 20;
                        break;
                    case 14:
                        $id_jornada = 21;
                        break;
                    case 17:
                        $id_jornada = 22;
                        break;
                    case 18:
                        $id_jornada = 23;
                        break;
                }
            }
            
        }
        $object1 = new partidos();
        $object2 = new Apuestas();

        // $partidos = new partidos();

        $ids = $object1->get_id_partidos($id_jornada);
        // echo 'siu';
        for($i=0;$i<count($ids);$i++){
            echo $object2 -> verificar_apuesta($ids[$i]);
            // echo '+';
        }
    }else{
        echo 0;
    }

    // $fecha_limite = date_create_from_format('d/m/y H:i',$dia_mes_año[0]."/".$dia_mes_año[1]."/".$dia_mes_año[2].' '.'17:00');  
?>