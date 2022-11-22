<!DOCTYPE html>
<html style="height: 100%;">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Qatar 2022</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Logo Qatar -->
	<link rel="icon" type="image/ico" href="img/logo_qatar.ico"/>
  <!-- Estilo Personalizado -->
	<link rel="stylesheet" type="text/css" href="css/iniciarSesion.css"/>
	<link rel="stylesheet" href="librerias/css/alertify.min.css" />
  <link rel="stylesheet" href="librerias/css/themes/default.min.css" />
  <script src="librerias/alertify.min.js"></script>
  <script src="librerias/alertify.js"></script>
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="librerias/jquery-3.5.1.js"></script>
	<script src="js/validar.js"></script>  
</head>
<body>
  <div class="contenedor">
    <div class="header">
        <img src="img/logo.webp" />
    </div>
    <div class="login">
      <form id="frmLogin">
        <input type="text" placeholder="Usuario" name="usuario" id="usuario"><br>
        <span class="icon-eye"><i class="fa-solid fa-eye-slash"></i></span>
        <input type="password" placeholder="Contraseña" name="password"  id="password"><br>
        <input type="button"  value="Entrar" id="entrarSistema" style="background-color: #99c04f;">
      </form>
      <a href="Frontend/registro.php"><input type="button" value="Registro" id="registro" style="background-color: #99c04f;"></a>
    </div>
    <script src="./js/index.js"></script>
    <h3 style="position: absolute;right: 20px;bottom: 8px;color: white;">v1.0</h3>
  </div>		

  <!-- Javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

		vacios=validarFormVacio('frmLogin');

		if(vacios > 0){
			alert("Debes llenar todos los campos!!");
			return false;
		}

		datos=$('#frmLogin').serialize();
		$.ajax({
			type:"POST",
			data:datos,
			url:"./Backend/sign_in.php",
			success:function(r){
				if(r==1){
					window.location="Frontend/apostar.php";
				}else{
					alert("No se pudo acceder :c");
				}
			}
		});
	});
});
</script>


<script type="text/javascript">
	function Enter(){
		tecla_enter = event.keyCode;
    
    	if(tecla_enter == 13){
            vacios=validarFormVacio('frmLogin');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#frmLogin').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"./Backend/sign_in.php",
				success:function(r){
					if(r==1){
					window.location="Frontend/apostar.php";
					}else{
						alert("No se pudo acceder");
					}
				}
			});
    	}
	}

	window.onkeydown = Enter;

</script>
