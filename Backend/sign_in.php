<?php
    session_start();
    require_once "./class/Users.php";
    
    $object = new users();
    
    // if(isset($_POST['sing_in'])){

        include('db.php');
        // $user = $_POST['user'];
        // $pass = $_POST['password'];

        $user = 'davidsanchez';
        $pass = '20190591J';
        echo $object->sign_in(array($user,$pass));

        
    // }
?>