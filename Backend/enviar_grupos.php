<?php
    require_once "./Grupos.php";
    
    $grupo = $_POST['id_grupo'];
    
    $object = new grupos();

    echo json_encode($object->tabla_grupo($grupo));

?>