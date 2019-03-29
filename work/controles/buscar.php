<?php
	requiere_once('../modulos/conexion.php');
	requiere_once('.../modulos/base.php');

	if(isset($GET['nombre'])){
		$nombre=$_GET['nombre'];
		$consultas=new base();
		$mensaje=$consultas->buscarProducto($nombre);
		echo $mensaje;
		echo"<div><br><a href='...ver.php'>Regesar</a></div>";
	}
?>