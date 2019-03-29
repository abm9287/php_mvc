<?php
class Base {
    public function insertarproducto($nombre,$descripcion,$categoria,$precio){
    $modelo = new Conexion();
    $conexion = $modelo -> get_conexion();
    $sql = "insert into producto(nombre,descripcion,categoria,precio) 
    values(:nombre,:descripcion,:categoria,:precio)";
    $statement = $conexion -> prepare($sql);
    $statement -> bindParam(':nombre',$nombre);
    $statement -> bindParam(':descripcion',$descripcion);
    $statement -> bindParam(':categoria',$categoria);
    $statement -> bindParam(':precio',$precio);

    if(!$statement){
        return "Error el registro esta vacio";
    }else{
        $statement -> execute();
        return "La carga se realizó con exito";
    }
}
    //METODO CONSULTAR arreglo para depositar los elementos que se vaya encontrando 
    public function consultarProductos(){
        $array = null;
        $modelo = new Conexion ();
        $conexion = $modelo -> get_conexion();
        $sql = "select * from Producto";
        $statement = $conexion->prepare($sql);
        $statement->execute(); 

        while($resultado=$statement->fetch()){
            $array[] = $resultado;
        }
        
        return $array;
    }

    public function eliminarProducto($id){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "delete from Producto where id = :id";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':id',$id);
        if(!$statement){
            return "No se puede borrar";
        }else{
            $statement->execute();
            return "El registro fue eliminado exitosamente";
        }

    }
    //se buscará el elemento
    public function buscarProductos($nombre){
        $array = null;
        $modelo = new Conexion ();
        $conexion = $modelo -> get_conexion();
        $nombre= "%".$nombre."%";
        $sql = "select * from Producto Where nombre like :nombre";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(':nombre',$nombre);
        $statement->execute(); 
        while($resultado=$statement->fetch()){
            $array[] = $resultado;
        }
        
        return $array;
    }
    public function recuperarProd($id){
        $array=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql="select * from Producto Where id=:id";
        $statement=$conexion->prepare($sql);
        $statement->binParam(':id',$id);//pasando el parámetro del id
        $statement->execute();
        while($resultado=$statement->fetch()){
            $array[] = $resultado;
        }
        return $array;
      }
    public function modificarProd($campo, $valor, $id){
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();
        $sql = "update Producto Set $campo= :valor where id=:id";
        $statement=$conexion->prepare($sql);
        $statement->binParam(':valor', $valor);
        $statement->binParam(':id', $id);
        if(!$statement){
            return "Error no se puede modificar";
        }else{
            $statement->execute();
            return" La actualización se realizó con éxito";
        }
        
      }
    
    }


?>