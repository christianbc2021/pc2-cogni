<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
     @import url("css/mycss.css");
    </style>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <title>Proyecto web</title>
</head>

<body>

    <head>
        <title>mostrar datos</title>
    </head>

    <body>

        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>NUMERO</th>
                    <th>CARRERA</th> 
                     <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a>               
                </tr>
            </thead>

            <?php
              include "conexion.php";
             

            // Realizando una consulta SQL
            $query = 'SELECT * FROM ESTUDIANTE';
            $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

            // Imprimiendo los resultados en HTML
            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                echo "\t<tr>\n";
                foreach ($line as $col_value) {
                    echo "\t\t<td>$col_value</td>\n";
    
                }


                echo "\t</tr>\n";
            }

            // Liberando el conjunto de resultados
           //pg_free_result($result);
            // Cerrando la conexión
            //pg_close($dbconn);
            ?>
        </table>

    </body>

</html>