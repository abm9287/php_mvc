<?php 
function cargar(){
    $consulta = new base();
    $filas = $consulta-> consultarProductos(); 
    echo "<table border = 1 bordercolor=blue>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>DESCRIPCIÓN</th>
            <th>CATEGORIA</th>
            <th>PRECIO</th>";
    foreach($filas as $fila){
        echo"<tr>";
        echo"<td>".$fila['id']."</td>";
        echo"<td>".$fila['nombre']."</td>";
        echo"<td>".$fila['descripcion']."</td>";
        echo"<td>".$fila['categoria']."</td>";
        echo"<td>".$fila['precio']."</td>";
        echo"<td><a  href = 'controles/eliminar.php?id=".$fila['id']."'>Eliminar</td>"; 
        
        
        

        echo"</tr>";     
    }
    
    echo "</table>";
}
    //función buscar
    function buscar($nombre){
        $consulta = new base();
         $filas = $consulta-> buscarProductos($nombre); 
        echo "<table border = 1 bordercolor=blue>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCIÓN</th>
                <th>CATEGORIA</th>
                <th>PRECIO</th>";
        if(isset($filas)){
            //registro
            foreach($filas as $fila){
            echo"<tr>";
            echo"<td>".$fila['id']."</td>";
            echo"<td>".$fila['nombre']."</td>";
            echo"<td>".$fila['descripcion']."</td>";
            echo"<td>".$fila['categoria']."</td>";
            echo"<td>".$fila['precio']."</td>";
            echo"<td><a  href = 'controles/buscar.php?id=".$fila['id']."'>Eliminar</td>";  
            echo"</tr>";     
            }
        }      
        echo "</table>";
        
    }

?>