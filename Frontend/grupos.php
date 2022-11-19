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
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <div class="contenedor">
    <div class="header">
      <h1>Grupos<img style="width:50px" src="../img/logo.webp"/></h1>
    </div>
    <div class="table-responsive">
      <table id="tablaArticuloDataTable" class="table table-striped table-bordered " style="text-align: center;">
        <thead>
          <tr>
            <td>Posicion</td>
            <td>Bandera</td>
            <td>Pais</td>
            <td>PJ</td>
            <td>G</td>
            <td>E</td>
            <td>P</td>
            <td>GF</td>
            <td>GC</td>
            <td>DG</td>
            <td>Pts</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>AAAA</td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
            <td><?php echo "AAA"; ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <br>
    <a href="../index.php"><input type="button" value="Volver" style="background-color: #99c04f;"></a>
    <script src="../js/index.js"></script>
    <!-- <h3 style="position: absolute;right: 20px;bottom: 8px;color: white;">v1.5</h3> -->
  </div>		
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