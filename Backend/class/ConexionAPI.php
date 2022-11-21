<?php
    class conectar{
        
        public function conexion(){
            $url = 'http://api.cup2022.ir/api/v1/user/login';
            
            $post = [
                'email' => 'davidademirsanchezcotrado@gmail.com',
                'password' => 'aurorabel123'
            ];
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Recibir respuesta del servidor
            // // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            // // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            $response = curl_exec($ch);
            $result = json_decode($response, true);
            return $result['data']['token'];            
            
        }
    }
    // $object = new conectar();
    // $token = $object->conexion();
    // // if(!$token){
    // //     echo "siuuu";
    // // }
    // echo ($token);
?>