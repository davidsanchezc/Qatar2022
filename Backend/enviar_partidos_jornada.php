<?php
    require_once "./Partidos.php";
    
    $jornada = $_POST['id_jornada'];
    
    $object = new partidos();

    echo json_encode($object->id_partidos($jornada));

?>
