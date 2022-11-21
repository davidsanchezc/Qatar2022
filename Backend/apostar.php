<?php
    session_start();
    require_once "./class/Apuestas.php";
    
    $object = new Apuestas();
    // echo $_SESSION['iduser'];
    // $data = $_POST['array_apuesta'];
    $datos = explode(",", $_POST['array_apuesta']);
    // id del formato
    $id_partido = $datos[0];
    $goles_local = $datos[1];
    $goles_visitante = $datos[1];
    // $datos=array($_POST['id_partido'], $_POST['goles_local'], $_POST['goles_visitante']);
    // $datos=array(1,2,0);

    echo $object->realizar_apuesta(array($id_partido, $goles_local, $goles_visitante));
?>