<?php
    // require_once "./Partidos.php";
    class users{
        
        public function sign_up($datos){
            include('db.php');
            $query = "INSERT INTO login(nombres, apellidos, user, password) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
            return mysqli_query($conn, $query);
        }

        public function sing_in($datos){
            include('db.php');
            $_SESSION['usuario'] = $datos[0];
            $_SESSION['iduser'] = self::traeID($datos);
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

        public function traeID($datos){
			include('db.php');

			$password=$datos[1];
            
			$query = "SELECT id_user FROM usuarios WHERE user='$datos[0]' and password='$password'"; 
			$result = mysqli_query($conn,$query);

			return mysqli_fetch_row($result)[0];
		}

        public function getDatosUser($idusuario){
            include('db.php');
            $query = "SELECT id, nombres, apellidos, user FROM login WHERE idusuario = '$idusuario'";
            $resultado = mysqli_query($conn, $query);

            $fila=mysqli_fetch_row($result);

            $datos=array('id' => $fila[0], 'nombres' => $fila[1], 'apellidos' => $fila[2], 'user' => $fila[3]);

            return $datos;
        }

        // public function realizar_apuesta($apuesta){
        //     // $id_partido = $apuesta[0];
        //     // $id_local = $apuesta[1];
        //     // $id_visitante = $apuesta[2];
        //     // $goles_local = $apuesta[3];
        //     // $goles_visitante = $apuesta[4];
        //     $idUsuario = $_SESSION['iduser'];
        //     include('db.php');
        //     $query = "INSERT INTO apuestas(id_user, id_partido, goles_local, goles_visitante) VALUES ('$idUsuario', '$apuesta[0]', '$apuesta[1]', '$apuesta[2]')";
        //     return mysqli_query($conn, $query);
        //     // $partido = new partidos();
        //     // $partido -> resultado_partido($id_partido);
            
        // }
    }
?>