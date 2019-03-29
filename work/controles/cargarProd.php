<?php
function cargarProd(){
	if(isset($_GET['id'])){
      $consulta = new base();
      $id=$_GET['id'];
	    $filas=$consulta->recuperarProducto($id);
		foreach($filas as $fila){
           echo'
           <form action 0 "" method="post">
             <table>
                <tr>
                  <td>Nombre</td>
                  <td><input type="texto" name="nombre" value="'.$fila['nombre'].'"></td>
                </tr>

                <tr>
                  <td>Descripción</td>
                  <td><textarea type="textarea" rows="10" cols="25" name="descripcion">value="'.$fila['descripcion'].'"</textarea></td>
                </tr>

                <tr>
                  <td>Categoría</td>
                  <td><input type="texto" name="categoria" value="'.$fila['categoria'].'"></td>
                </tr>

                <tr>
                  <td>Precio</td>
                  <td><input type="texto" name="precio" value="'.$fila['precio'].'"></td>
                </tr>

                <tr>
                  <td></td>
                  <td><input type="submit" value="Guardar"></td>
                </tr>
             </table>
          </form>';
		  
        }
    }
}
?>