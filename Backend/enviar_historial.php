<?php
    session_start();
    require_once "./class/Apuestas.php";
    
    $object = new apuestas();
    echo json_encode($object->getApuestas());
?>