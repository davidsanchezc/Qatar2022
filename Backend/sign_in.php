<?php
    require_once "../../class/Users.php";

    $object = new users();
    
    if(isset($_POST['sing_in'])){

        include('db.php');
        $user = $_POST['user'];
        $pass = $_POST['password'];


        echo $object->loginUser(array(
            $user,
            $pass
        ));

        
    }
?>