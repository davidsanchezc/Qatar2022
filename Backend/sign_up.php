<?php
    require_once "./class/Users.php";

    $object = new users();

    // if(isset($_POST['sign_up'])){
        $datos = array($_POST['nombres'], $_POST['apellidos'], $_POST['user'], $_POST['password']);
    // );
        echo $object -> sign_up(array($_POST['nombres'], $_POST['apellidos'], $_POST['user'], $_POST['password']));
        // echo $object -> sign_up(array('David Ademir','Sanchez Cotrado','davidsanchez','20190591J'));
        // echo $object -> sign_up(array('Piero Ayrton','Estrada Cantaro','pieroestrada','20190114G')); 

    // }
?>