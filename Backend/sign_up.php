<?php
    require_once "./class/Users.php";

    $object = new users();

    // if(isset($_POST['sign_up'])){
        $datos = array($_POST['nombre'], $_POST['apellido'], $_POST['usuario'], $_POST['password']);
    // );
        echo $object -> sign_up(array($_POST['nombre'], $_POST['apellido'], $_POST['usuario'], $_POST['password']));
        // echo $object -> sign_up(array('David Ademir','Sanchez Cotrado','davidsanchez','20190591J'));
        // echo $object -> sign_up(array('Piero Ayrton','Estrada Cantaro','pieroestrada','20190114G')); 

    // }
?>