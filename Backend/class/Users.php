<?php
    
    class users{
        
        public function sign_up($datos){
            include('db.php');
            $query = "INSERT INTO login(id, nombres, apellidos, user, password) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";
            return mysqli_query($conn, $query);
        }

        public function sing_in($datos){
            include('db.php');
            $_SESSION['usuario'] = $datos[0];
            // $password = $datos[1];
            $query = "SELECT * FROM login WHERE user = $datos[0] and password = $datos[1]";
            $resultado = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){
				return 1;
            }else{
                session_destroy();
                return 0;
            }
        }

        public function getDatosUser($idusuario){
            include('db.php');
            $query = "SELECT id, nombres, apellidos, user FROM login WHERE idusuario = '$idusuario'";
            $resultado = mysqli_query($conn, $query);

            $fila=mysqli_fetch_row($result);

            $datos=array('id' => $fila[0], 'nombres' => $fila[1], 'apellidos' => $fila[2], 'user' => $fila[3]);

            return $datos;
        }
    }
?>