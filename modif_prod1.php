<?php
  include 'conexion.php';

  $consulta = $_GET['CODIGO'];


    $query="SELECT * FROM productos WHERE CODIGO='".$consulta."' ";
    $result=pg_query($query) or die('La consulta fallo: ' . pg_last_error());
    $filas=pg_fetch_array($result, null, PGSQL_ASSOC);



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="OLDCODIGO" value="<?php echo $consulta?> "> 

  		<label>CODIGO: </label>
  		<input type="text"  name="NEWCODIGO"; value="<?php echo $filas['codigo'] ?>" ><br>
  		
  		<label>DESCRIPCION: </label>
  		<input type="text" name="DESCRIPCION" value="<?php echo $filas['descripcion'] ?>"><br>
  		
  		<label>PRECIO: </label>
  		<input type="text" name="PRECIO" value="<?php echo $filas['precio'] ?>"><br>
  		
  		<label>STOCK: </label>
  		<input type="text"  name="STOCK" value="<?php echo $filas['stock'] ?>"><br>

  		<label>MARCA: </label>
  		<input type="text"  name="MARCA" value="<?php echo $filas['marca'] ?>"><br>
  		
  		<label>MODELO: </label>
  		<input type="text"  name="MODELO" value="<?php echo $filas['modelo'] ?>"><br>
  		
  		<label>CATEGORIA: </label>
  		<input type="text"  name="CATEGORIA" value="<?php echo $filas['categoria'] ?>"><br>
  		
  		<label>FECHA_PRODUCCION: </label>
  		<input type="text"  name="FECHA_PRODUCCION" value="<?php echo $filas['fecha_produccion'] ?>"><br>


  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>