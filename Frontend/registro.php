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
  <link rel="stylesheet" href="../librerias/css/alertify.min.css" />
  <link rel="stylesheet" href="../librerias/css/themes/default.min.css" />
  <script src="../librerias/alertify.min.js"></script>
  <script src="../librerias/alertify.js"></script>
	<script src="../librerias/jquery-3.2.1.min.js"></script>
	<script src="../librerias/jquery-3.5.1.js"></script>
	<script src="../js/validar.js"></script>  
</head>
<body>
  <div class="contenedor">
    <div class="header">
      <h1>Registro<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
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
  </div>		
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#registrarSistema').click(function(){

      vacios=validarFormVacio('frmRegister');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

      datos=$('#frmRegister').serialize();
      $.ajax({
        type:"POST",
        data:datos,
        url:"../Backend/sign_up.php",
        success:function(r){
          if(r==1){
            // alertify.success("Registro exitoso");
            alertify.alert("Registro exitoso").set({title:"EXITO"});
            window.location="../index.php";
          }else if(r==0){
            alertify.error("Nombre de usuario ya existente")
          }else{
            alertify.error("No se realizo el registro")
          }
        }
      })
    });
  });
</script>

<script type="text/javascript">
	function Enter(){
		tecla_enter = event.keyCode;
    
    	if(tecla_enter == 13){
        vacios=validarFormVacio('frmRegister');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmRegister').serialize();
			$.ajax({
        type:"POST",
        data:datos,
        url:"../Backend/sign_up.php",
        success:function(r){
          console.log(r)
          if(r==1){
            // alertify.success("Registro exitoso");
            alertify.alert("Registro exitoso").set({title:"EXITO"});
            window.location="../index.php";
          }else if(r==0){
            alertify.error("Nombre de usuario ya existente")
          }else{
            alertify.error("No se realizo el registro")
          }
        }
      })
    }
	}

	window.onkeydown = Enter;

</script>