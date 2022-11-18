<?php
    require_once "./ConexionAPI.php";
    
    class grupos{

        function conectar_grupos(){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/standings';
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));


            
            $res = curl_exec($ch);

            curl_close($ch);

            return $res;
        }

        function conectar_grupo($grupo){
            $c = new conectar();
            $token = $c->conexion();

            $url = 'http://api.cup2022.ir/api/v1/standings/'.$grupo;
            $authorization = "Authorization: Bearer ".$token;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));



            $res = curl_exec($ch);

            curl_close($ch);

            return $res;

        }

        function getGrupos(){
            
        }
    }
    // $data = json_decode(file_get_contents('https://api.mercadolibre.com/users/226384143/'));
    $object = new grupos();
    $res = $object->conectar_grupo('G');
    echo $res;
?>