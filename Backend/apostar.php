<?php
    require_once "../../class/Apuestas.php";
    
    $object = new Apuestas();

    $datos=array(
		$_POST['id_partido'],
		$_POST['goles_local'],
		$_POST['goles_visitante']
	);
    echo $object->realizar_apuesta($datos);
?>