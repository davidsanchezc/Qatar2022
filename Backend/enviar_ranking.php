<?php
    // require_once "./Users.php";
    require_once "./Ranking.php";
    
    // $grupo = $_POST['id_grupo'];
    
    $object = new rankings();
    
    echo json_encode($object->all_user_ranking());
    
?>