<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro - Qatar 2022</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Logo Qatar -->
	<link rel="icon" type="image/ico" href="../img/logo_qatar.ico"/>
  <!-- Estilo Personalizado -->
	<link rel="stylesheet" type="text/css" href="../css/registro.css"/>  
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <div class="contenedor">
    <div class="header">
      <h1>Registro</h1>
      <!-- <img src="../img/logo.webp" /> -->
    </div>
    <div class="login">
      <form id="frmRegister">
        <input type="text" placeholder="Usuario" name="usuario" id="usuario"><br>
        <span class="icon-eye"><i class="fa-solid fa-eye-slash"></i></span>
        <input type="password" placeholder="Contraseña" name="password"  id="password"><br>
        <input type="text" placeholder="Nombre" name="nombre" id="nombre"><br>
        <input type="text" placeholder="Apellido" name="apellido" id="apellido"><br>
        <input type="button"  value="Registrarme" id="registrarSistema" style="background-color: #99c04f;">
      </form>
      <br>
      <a href="../index.php"><input type="button" value="Volver" style="background-color: #99c04f;"></a>
    </div>
    <script src="../js/index.js"></script>
    <!-- <h3 style="position: absolute;right: 20px;bottom: 8px;color: white;">v1.5</h3> -->
  </div>		
</body>
</html>