<?php
    require_once "modulos/conexion.php";
    require_once "modulos/base.php";
    require_once "controles/cargar.php";
?>

<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver Producto</title>
    </head>
    <body>
        <h1>LISTA DE PRODUCTOS</h1>
        <h4>Belén Chamba</h4>
        <div>
            <form method="get">
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
            </form>
        </div>

        <?php 
            if(isset($_GET['buscar'])){
                buscar($_GET['buscar']);
            }else{
                cargar();     
            }
        ?>
        <div><br><a href = "index.html">Regresar</a></div> 
        
        
    </body>
</html>