<?php
    class conectar{
        

        // public $url = 'http://api.cup2022.ir/api/v1/user/login';

        // public $post = [
        //     'email' => 'davidademirsanchezcotrado@gmail.com',
        //     'password' => 'aurorabel123',
        // ];

        public function conexion(){
            $url = 'http://api.cup2022.ir/api/v1/user/login';

            $post = [
                'email' => 'davidademirsanchezcotrado@gmail.com',
                'password' => 'aurorabel123',
            ];
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Recibir respuesta del servidor

            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            $response = curl_exec($ch);

            curl_close($ch);
            $response_json = json_decode($response, true);
            return $response_json['data']['token']; // Se obtiene el token

        }
    }
?>