<?php
	session_start();
  if(isset($_SESSION['usuario'])){
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grupos | Qatar 2022</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- Logo Qatar -->
	<link rel="icon" type="image/ico" href="../img/logo_qatar.ico"/>
  <!-- Estilo Personalizado -->
	<link rel="stylesheet" type="text/css" href="../css/registro.css"/>  
	<link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
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
    <h1>Grupos<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>

    <div id="divA" hidden>
      <h2>Grupo A</h2>
      <div class="table-responsive">
        <table id="tableA" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divB" hidden>
      <h2>Grupo B</h2>
      <div class="table-responsive">
        <table id="tableB" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divC" hidden>
      <h2>Grupo C</h2>
      <div class="table-responsive">
        <table id="tableC" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divD" hidden>
      <h2>Grupo D</h2>
      <div class="table-responsive">
        <table id="tableD" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divE" hidden>
      <h2>Grupo E</h2>
      <div class="table-responsive">
        <table id="tableE" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divF" hidden>
      <h2>Grupo F</h2>
      <div class="table-responsive">
        <table id="tableF" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divG" hidden>
      <h2>Grupo G</h2>
      <div class="table-responsive">
        <table id="tableG" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <div id="divH" hidden>
      <h2>Grupo H</h2>
      <div class="table-responsive">
        <table id="tableH" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
          <thead class="table-dark">
            <tr>
              <td>N°</td>
              <td>Pais</td>
              <td>PJ</td>
              <td>PG</td>
              <td>PE</td>
              <td>PP</td>
              <td>GF</td>
              <td>GC</td>
              <td>DG</td>
              <td>Pts</td>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="?estado=A">A</a></li>
        <li class="page-item"><a class="page-link" href="?estado=B">B</a></li>
        <li class="page-item"><a class="page-link" href="?estado=C">C</a></li>
        <li class="page-item"><a class="page-link" href="?estado=D">D</a></li>
        <li class="page-item"><a class="page-link" href="?estado=E">E</a></li>
        <li class="page-item"><a class="page-link" href="?estado=F">F</a></li>
        <li class="page-item"><a class="page-link" href="?estado=G">G</a></li>
        <li class="page-item"><a class="page-link" href="?estado=H">H</a></li>
      </ul>
    </nav>

    <br>
    <script src="../js/index.js"></script>
  </div>
  
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
	function getParameterByName(estado) {
    	estado = estado.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    	var regex = new RegExp("[\\?&]" + estado + "=([^&#]*)"),
    	results = regex.exec(location.search);
    	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	$(document).ready(function(){
    letra = getParameterByName('estado');
    if(letra == ""){
      letra = 'A';
    }
    $.ajax({
      type:"POST",
      data:'id_grupo=' + letra,
      url:"../Backend/enviar_grupos.php",
      success:function(r){
        console.log(r)
        dato=jQuery.parseJSON(r);
        for(let i=0; i<dato.length; i++){
          $(`#table${letra}>tbody`).append(`<tr id="${i}" class="child" style="background-color: #454c52;">
          <td>${i+1}</td>
          <td>${dato[i][0]}</td>
          <td>${dato[i][1]}</td>
          <td>${dato[i][2]}</td>
          <td id="cant${i}">${dato[i][3]}</td>
          <td>${dato[i][4]}</td>
          <td>${dato[i][5]}</td>
          <td>${dato[i][6]}</td>
          <td>${dato[i][7]}</td>
          <td>${dato[i][8]}</td>
          </tr>`);
        }
      }
    });    
    if(letra=='A'){
      $('#divA').prop("hidden", false);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='B'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", false);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='C'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", false);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='D'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", false);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='E'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", false);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='F'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", false);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='G'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", false);
      $('#divH').prop("hidden", true);
    }
    else if(letra=='H'){
      $('#divA').prop("hidden", true);
      $('#divB').prop("hidden", true);
      $('#divC').prop("hidden", true);
      $('#divD').prop("hidden", true);
      $('#divE').prop("hidden", true);
      $('#divF').prop("hidden", true);
      $('#divG').prop("hidden", true);
      $('#divH').prop("hidden", false);
    }
	});	
</script>

<?php
	}else{
    header("location:../index.php");
  }
?>