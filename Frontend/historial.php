<?php
	session_start();
  if(isset($_SESSION['usuario'])){
    require_once "../Backend/db.php";
    $id = $_SESSION['iduser'];
    $sql="SELECT 	
      id_apuesta,
      id_partido,
      goles_local,
      goles_visitante,
      fecha_apuesta
    from apuestas where id_user='$id'";
    $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Historial Apuestas | Qatar 2022</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Logo Qatar -->
	<link rel="icon" type="image/ico" href="../img/logo_qatar.ico"/>
  <!-- Estilo Personalizado -->
	<link rel="stylesheet" type="text/css" href="../css/registro.css"/>  
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>  
	<link rel="stylesheet" type="text/css" href="../css/apostar.css"/>  
  <!-- Alertify -->
  <!-- <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script> -->
  <link rel="stylesheet" href="../librerias/css/alertify.min.css" />
  <link rel="stylesheet" href="../librerias/css/themes/default.min.css" />
  <script src="../librerias/alertify.min.js"></script>
  <script src="../librerias/alertify.js"></script>
	<script src="../librerias/jquery-3.2.1.min.js"></script>
	<script src="../librerias/jquery-3.5.1.js"></script>
	<script src="../js/validar.js"></script>
  <?php 
  require_once "menu.php"; 
  ?>
</head>
<body>
  <div class="contenedor">
    <br>
    <h1 id="historial">Historial de Apuestas <img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>

    <div class="table-responsive">
      <table id="tableRanking" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
        <thead class="table-dark">
          <tr>
            <td>ID</td>
            <td>Partido</td>
            <td>Goles Local</td>
            <td>Goles Visitante</td>
            <td>Fecha</td>
          </tr>
        </thead>
        <tbody>
          <?php while($ver=mysqli_fetch_row($result)): ?>
            <tr>
              <td><?php echo $ver[0]; ?></td>
              <td id="partido<?php echo $ver[1]; ?>"><?php echo "Cargando..."; ?></td>
              <td><?php echo $ver[2]; ?></td>
              <td><?php echo $ver[3]; ?></td>
              <td><?php echo $ver[4]; ?></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>


    <br>
    <script src="../js/index.js"></script>
  </div>
  
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

<script>
  $(document).ready(function(){
    $.ajax({
      type:'POST',
      url: '../Backend/enviar_historial.php',
      success:function(r){
        console.log(r)
        dato=jQuery.parseJSON(r);
        console.log(dato)
        for(i=0; i<dato.length; i++){
          $(`#partido${dato[i][0]}`).html(`${dato[i][1]}`)
        }
      }
    });
  });
</script>

<?php
	}else{
    header("location:../index.php");
  }
?>