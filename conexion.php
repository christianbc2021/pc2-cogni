<?php

$host = "ec2-44-196-223-128.compute-1.amazonaws.com";
$dbname = "d8lb6n5mqjgb7j";
$username = "wbnfkndrzxrkkz";
$password = "3036efb621bf824788107fd759bca31fccb05947abce30e74a24a46fb6bbaf8b";

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=$host dbname=$dbname user=$username password=$password")
    or die('No se ha podido conectar: ' . pg_last_error());
    
pg_query("SET NAMES 'utf8'");

?>