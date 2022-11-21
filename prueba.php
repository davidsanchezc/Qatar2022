<?php
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

    // echo $minutos;
    if($horas = 17 && $minutos>1 && $minutos<5){
        // echo "a";
    }
?>