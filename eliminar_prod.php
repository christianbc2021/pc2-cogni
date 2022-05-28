<?php
	include "conexion.php";

	EliminarProducto($_GET['CODIGO']);

	function EliminarProducto($no)
	{
		$query="DELETE FROM productos WHERE CODIGO='".$no."' ";
        $result=pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	}

	header('Location:index.php');

?>


