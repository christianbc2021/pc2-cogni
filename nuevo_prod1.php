<?php
  include "conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
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
  		<span> <h1>Nuevo Producto</h1> </span>
  		<br>
	  <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <label>CODIGO: </label>
  		<input type="text" id="CODIGO" name="NEWCODIGO"><br>
  		
  		<label>NOMBRE: </label>
  		<input type="text" id="NOMBRE" name="NOMBRE" ><br>
  		
  		<label>APELLIDO: </label>
  		<input type="text" id="APELLIDO" name="APELLIDO"><br>
  		
  		<label>NUMERO: </label>
  		<input type="text" id="NUMERO" name="NUMERO"><br>

  		<label>CARRERA: </label>
  		<input type="text" id="CARRERA" name="CARRERA"><br>
  		
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