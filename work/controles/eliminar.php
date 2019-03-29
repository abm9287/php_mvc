<?php

    require_once('../modulos/conexion.php');
    require_once('../modulos/base.php');

    if(isset($_GET['id'])){
    $id=$_GET['id'];
    $consultas=new Base();
    $mensaje = $consultas->eliminarProducto($id);
    echo $mensaje; 
    echo"<div><br><a href= '../ver.php'>Regresar</a></div>";
    }

?>