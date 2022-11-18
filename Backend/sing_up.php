<?php
    require_once "../../class/Users.php";

    $object = new users();

    if(isset($_POST['sing_up'])){
        $datos = array(
            $_POST['id'],
            $_POST['nombres'],
            $_POST['apellidos'],
            $_POST['user'],
            $_POST['password']
    );
        echo $object -> sign_up($datos); 
    }
?>