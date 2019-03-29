<?php
    require_once('../modulos/conexion.php');
    require_once('../modulos/base.php');
	requiere_once('controles/cargarProd.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Modificar</title>
    </head>
    <body>
        <h1>Modificar Producto</h1>
        <?php 
            cargarProd(); 
        ?>
        
    </body>
    </html>