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
	<script src="../librerias/jquery-3.2.1.min.js"></script>
	<script src="../librerias/jquery-3.5.1.js"></script>
	<script src="../js/funciones.js"></script>
  <?php 
  require_once "menu.php"; 
  ?>
</head>
<body>
  <div class="contenedor">
    <br>
    <h1 id="jornada1">Jornada 1<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada2">Jornada 2<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada3">Jornada 3<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada4">Jornada 4<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada5">Jornada 5<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada6">Jornada 6<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada7">Jornada 7<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada8">Jornada 8<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada9">Jornada 9<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada10">Jornada 10<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada11">Jornada 10<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada12">Jornada 10<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>
    <h1 hidden id="jornada13">Jornada 10<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>

    <!-- <h2>Grupo A</h2> -->

    <div class="container">
      <div class="row contenedor-paises">
        <div id="col-local1" class="col col-pais m-1 text-center row">
        </div>
        <div id="col-local2" class="col col-pais m-1 text-center row">
        </div>
        <div id="col-local3" class="col col-pais m-1 text-center row">
        </div>
        <div id="col-local4" class="col col-pais m-1 text-center row">
        </div>
      </div>
    </div>

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="?jornada=1">1</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=2">2</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=3">3</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=4">4</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=5">5</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=6">6</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=7">7</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=8">8</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=9">9</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=10">10</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=11">11</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=12">12</a></li>
        <li class="page-item"><a class="page-link" href="?jornada=13">13</a></li>
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
  function getParameterByName(jornada) {
    jornada = jornada.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    	var regex = new RegExp("[\\?&]" + jornada + "=([^&#]*)"),
    	results = regex.exec(location.search);
    	return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}

  $(document).ready(function(){
    jornada = getParameterByName('jornada');
    if(jornada){
      $.ajax({
        type:"POST",
        data:'id_jornada=' + jornada,
        url:"../Backend/enviar_partidos_jornada.php",
        success:function(r){
          console.log(r)
          dato=jQuery.parseJSON(r);
          console.log(dato);
          for(let i=0; i<dato.length; i++){
            $(`#col-local${i+1}`).append(`<div id="divlocal${i+1}" class="btn btn-pais col m-1 local">
              <h2 id="local${i+1}" style="text-align: -webkit-center;">
              <img class="banderalocal" style="display:block; max-height: 50px;" src="${dato[i][3]}"/>${dato[i][1]}</h2>
            </div>
            <div id="resultado${i+1}" class="btn col m-1 empate">
                <h2 id="goleslocal${i+1}">
                  2           
                </h2>
                <h2>
                  -
                </h2>
                <h2 id="golesvisita${i+1}">
                  0
                </h2>
            </div>  
            <div id="divvisita1" class="btn btn-pais col m-1 visita">
              <h2 id="visita${i+1}" style="text-align: -webkit-center;">
              <img class="banderavisita" style="display:block; max-height: 50px;" src="${dato[i][4]}"/>${dato[i][2]}</h2>
            </div>  
            <div id="apostar${i+1}" class="btn btn-success mt-3">Apostar</div>
            `);
          }
        }
      });    
      if(jornada=='1'){
        $('#jornada1').prop("hidden", false);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='2'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", false);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='3'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", false);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='4'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", false);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='5'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", false);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='6'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", false);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='7'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", false);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='8'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", false);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='9'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", false);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='10'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", false);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='11'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", false);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='12'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", false);
        $('#jornada13').prop("hidden", true);
      }
      else if(jornada=='13'){
        $('#jornada1').prop("hidden", true);
        $('#jornada2').prop("hidden", true);
        $('#jornada3').prop("hidden", true);
        $('#jornada4').prop("hidden", true);
        $('#jornada5').prop("hidden", true);
        $('#jornada6').prop("hidden", true);
        $('#jornada7').prop("hidden", true);
        $('#jornada8').prop("hidden", true);
        $('#jornada9').prop("hidden", true);
        $('#jornada10').prop("hidden", true);
        $('#jornada11').prop("hidden", true);
        $('#jornada12').prop("hidden", true);
        $('#jornada13').prop("hidden", false);
      }
    }
	});
</script>