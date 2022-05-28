<?php
	include 'conexion.php';

	NuevoProducto($_POST['NEWCODIGO'], $_POST['NOMBRE'], $_POST['APELLIDO'], $_POST['NUMERO'],$_POST['CARRERA']);

	function NuevoProducto($NEWCODIGO, $NOMBRE, $APELLIDO, $NUMERO,$CARRERA)
	{
		$query="INSERT INTO estudiante (CODIGO, NOMBRE, APELLIDO,NUMERO,CARRERA) VALUES ('".$NEWCODIGO."', '".$NOMBRE."', '".$APELLIDO."', '".$NUMERO."','".$CARRERA."')";
		$result=pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	}


	header('Location:index.php');

?>

