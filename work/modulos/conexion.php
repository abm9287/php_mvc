<?php

class Conexion{
    public function get_conexion(){
        $user = "postgres";
        $pass = "19921987venom";
        $host = "localhost";
        $db = "pedido";
        $conexion = new PDO("pgsql:host=$host;dbname=$db",$user,$pass);
        //cadena de conexión
        return $conexion;
    }
}
?>

