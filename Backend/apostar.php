<?php
    session_start();
    require_once "./class/Apuestas.php";
    
    $object = new Apuestas();
    // echo $_SESSION['iduser'];
    // $datos=array($_POST['id_partido'], $_POST['goles_local'], $_POST['goles_visitante']);
    $datos=array(1,2,0);

    echo $object->realizar_apuesta($datos);
?>