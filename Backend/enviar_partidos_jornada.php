<?php
    require_once "./class/Partidos.php";
    // Se tarda 
    $jornada = $_POST['id_jornada'];
    
    $object = new partidos();
    
    echo json_encode($object->encuentros($jornada));

?>
