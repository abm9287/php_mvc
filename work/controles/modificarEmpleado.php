<?php

	require_once ('../modulo/conexion.php');
	require_once ('../modulo/base.php');

	$mensaje = null;
	$consulta = new DataBase();
	
	$nombre = $_POST['nombre'];	
	$apellido = $_POST['apellido'];
	$cargo = $_POST['cargo'];
	$salario = $_POST['salario'];
	$id = $_POST['id'];
	
	if(strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($cargo) > 0 && strlen($salario) > 0){
		$mensaje = $consulta->modificarEmpleado("nombre", $nombre, $id);
		$mensaje = $consulta->modificarEmpleado("apellido", $apellido, $id);
		$mensaje = $consulta->modificarEmpleado("cargo", $cargo, $id);
		$mensaje = $consulta->modificarEmpleado("salario", $salario, $id);
		
		echo $mensaje;
		echo "<div><a href = '../ver.php'>Ver Empleados</a></div>";
	}else{
		echo "Ingrese todos los campos";
	}


?>