<?php
    require_once "./ConexionAPI.php";
    
    class equipos{

        function extraerequipos(){
            $c = new conectar();
            $r = $c->conexion();
            return $r;
        }
    }
    // $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'));
    $object = new equipos();
    $res = $object->extraerequipos();
    echo $res;
?>