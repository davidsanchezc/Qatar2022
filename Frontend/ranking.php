<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grupos - Qatar 2022</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Logo Qatar -->
	<link rel="icon" type="image/ico" href="../img/logo_qatar.ico"/>
  <!-- Estilo Personalizado -->
	<link rel="stylesheet" type="text/css" href="../css/registro.css"/>  
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>  

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
    <h1>Ranking<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <br>
    <div class="table-responsive">
      <table id="tableRanking" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
        <thead class="table-dark">
          <tr>
            <td>Posicion</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>PJ</td>
            <td>MarcadorExacto</td>
            <td>DiferenciaGoles</td>
            <td>Atinar Ganador</td>
            <td>Pts</td>
          </tr>
        </thead>
        <tbody>
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

<script type="text/javascript">
  $(document).ready(function(){
    console.log("Entra");
    $.ajax({
      type:"POST",
      url:"../Backend/enviar_ranking.php",
      success:function(r){
        console.log(typeof(r))
        console.log(r)
        dato=jQuery.parseJSON(r);
        for(let i=0; i<dato.length; i++){
          $(`#tableRanking>tbody`).append(`<tr id="${i}" class="child" style="background-color: #454c52;">
          <td>${i+1}</td>
          <td>${dato[i][0]}</td>
          <td>${dato[i][1]}</td>
          <td>${dato[i][2]}</td>
          <td>${dato[i][3]}</td>
          <td>${dato[i][4]}</td>
          <td>${dato[i][5]}</td>
          <td>${dato[i][6]}</td>
          </tr>`);
        }
      }
    });    
  });
</script>