<?php
    require_once "./Partidos.php";
    require_once "./Apuestas.php";
    
    te_default_timezone_set('America/Lima');
    $fechaActual = date('d/m/y H:i');

    
    $object = new apuestas();
    // $partidos = new partidos();
    
    
    $ids = $partidos->get_id_partidos(3);

    for($i=0;$i<count($ids);$i++){
        echo $object -> verificar_apuesta($ids[$i]);
    }
    

?>