<?php 
	// require_once "../../clases/Conexion.php";
	// $c= new conectar();
	// $conexion=$c->conexion();
	// $sql="SELECT art.nombre,
	// 				mar.nombremarca,
	// 				cat.nombreCategoria,
	// 				art.descripcion,
	// 				uni.nombreunidad,
	// 				art.cantidad,
	// 				art.stockmin,
	// 				art.serie,
	// 				ubi.nombreubicaciones,
	// 				art.precio,
	// 				img.ruta,						
	// 				art.id_producto
	// 	  from articulos as art
	// 	  inner join marca as mar
	// 	  on art.id_marca=mar.id_marca
	// 	  inner join categorias as cat
	// 	  on art.id_categoria=cat.id_categoria
	// 	  inner join imagenes as img
	// 	  on art.id_imagen=img.id_imagen
	// 	  inner join ubicaciones as ubi
	// 	  on art.id_ubicacion=ubi.id_ubicaciones
	// 	  inner join unidad as uni
	// 	  on art.id_unidad=uni.id_unidad
	// 	  order by art.serie desc";
		  
	// $result=mysqli_query($conexion,$sql);

 ?>


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
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
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
      <table id="tablaArticuloDataTable" class="table table-light table-striped table-bordered " style="text-align: center; color:#000;">
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
          <?php 
            // while($ver=mysqli_fetch_row($result)): 
          ?>
          <tr>
            <td>1</td>
            <td><?php echo "Jug1"; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
            <td><?php echo 0; ?></td>
          </tr>
          <tr>
            <td>2</td>
            <td><?php echo "Jug2"; ?></td>
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

    <br>
    <script src="../js/index.js"></script>
  </div>
  
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
      $('#tablaArticuloDataTable').DataTable({
      language : {
        url: "../librerias/datatable/es.json"
      }
    });
    } );
</script>