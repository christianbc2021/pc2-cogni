<?php
	include 'conexion.php';
	
	ModificarProducto($_POST['OLDCODIGO'],$_POST['NEWCODIGO'], $_POST['DESCRIPCION'], $_POST['PRECIO'], $_POST['STOCK'],$_POST['MARCA'], $_POST['MODELO'], $_POST['CATEGORIA'], $_POST['FECHA_PRODUCCION']);

	function ModificarProducto($OLDCODIGO,$NEWCODIGO, $DESCRIPCION, $PRECIO, $STOCK,$MARCA, $MODELO, $CATEGORIA, $FECHA_PRODUCCION)
	{
		$query="UPDATE productos SET CODIGO= '".$NEWCODIGO."', DESCRIPCION= '".$DESCRIPCION."', PRECIO='".$PRECIO."', STOCK= '".$STOCK."',MARCA='".$MARCA."', MODELO= '".$MODELO."', CATEGORIA='".$CATEGORIA."', FECHA_PRODUCCION= '".$FECHA_PRODUCCION."' WHERE CODIGO='".$OLDCODIGO."' ";
		$result=pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	}

	header('Location:index.php');


?>

