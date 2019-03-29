<?php

	require_once ('../modulo/conexion.php');
	require_once ('../modulo/base.php');

	$mensaje = null;
	$consulta = new base();
	
	$nombre = $_POST['nombre'];	
	$descripcion = $_POST['descripcion'];
	$categoria = $_POST['categoria'];
	$precio = $_POST['precio'];
	$id = $_POST['id'];
	
	if(strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($cedula) > 0){
		$mensaje = $consulta->modificarProd("nombre", $nombre, $id);
		$mensaje = $consulta->modificarProd("descripcion", $descripcion, $id);
		$mensaje = $consulta->modificarProd("categoria", $categoria, $id);
		$mensaje = $consulta->modificarProd("precio", $precio, $id);
		
		echo $mensaje;
		echo "<div><a href = '../ver.php'>Ver Producto</a></div>";
	}else{
		echo "Ingrese todos los campos";
	}


?>