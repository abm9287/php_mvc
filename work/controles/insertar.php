<?php 
require_once('../modulos/conexion.php');
require_once('../modulos/base.php');

$mensaje = null;
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
if(strlen($nombre)>0 && strlen($descripcion)>0 && strlen($categoria)>0 && strlen($precio)>0 )
{
    $consulta = new Base();
    $mensaje  = $consulta->insertarproducto($nombre,$descripcion,$categoria,$precio);
    echo "<a href= '../index.html'>Regresar..</a>";
}else{
    echo "Porfavor ingrese los datos";
}
echo $mensaje;
?>