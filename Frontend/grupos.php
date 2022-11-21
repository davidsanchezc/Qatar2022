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
	<script src="../js/validar.js"></script>
  <?php 
  require_once "menu.php"; 
  ?>
</head>
<body>
  <div class="contenedor">
    <br>
    <h1>Grupos<img class="logoQatar" style="width:50px" src="../img/logo.webp"/></h1>

    <h2 id="A">Grupo A</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    
    <!-- <h2>Grupo B</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div> -->
<!-- 
    <h2>Grupo C</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Grupo D</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Grupo E</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Grupo F</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Grupo G</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Grupo H</h2>

    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Ecuador"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
        </tbody>
      </table>
    </div> -->

    <br>
    <script src="../js/index.js"></script>
  </div>
  
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<!-- <script type="text/javascript">
  $(document).ready(function() {
      $('#tablaArticuloDataTable').DataTable({
      language : {
        url: "../librerias/datatable/es.json"
      }
    });
    } );
</script> -->

<script>
		window.onload=function() {

		}
		</script>

<script type="text/javascript">
  $(document).ready(function() {
    alert('OK');
      console.log("hola")
			$.ajax({
				type:"POST",
				data:'id_grupo=' + 'A',
				url:"../Backend/enviar_grupos.php",
				success:function(r){
          console.log(r)
					dato=jQuery.parseJSON(r);
          console.log(dato);
          alert(dato);
			// 		for(let i=0; i<dato.length; i++){
			// 			$("#tableSoliP>tbody").append(`<tr id="${i}" class="child" style="background-color: #454c52;">
			// 			<td>${dato[i]['id_p']}</td>
			// 			<td>${dato[i]['nombre']}</td>
			// 			<td>${dato[i]['descripcion']}</td>
			// 			<td>${dato[i]['serie']}</td>
			// 			<td id="cant${i}">${dato[i]['cantidad']}</td>
			// 			<td id="stock${i}">${dato[i]['stock']}</td>
			// 			<td><img width="50" height="50" class="img-thumbnail" id="imgp" src="${dato[i]['ruta']}"/></td><td><span data-toggle="modal" data-target="#abremodalUpdateProducto"  class="btn btn-warning btn-xs" onclick="actualizarCant(${i})">
			// 	<span class="glyphicon glyphicon-pencil"></span>
			// </span></td><td><span class="btn btn-danger btn-xs" onclick="quitar(${i})">
      //           <span class="glyphicon glyphicon-remove"></span>
      //       </span></td></tr>`);
			// 		}
				}
			});
    
    } );
</script>