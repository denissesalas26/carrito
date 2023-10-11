1<?php

//variable para base de datos
$servidor = "localhost";
$db = "carrito_venta";
$usuario = "root";
$password= "root";

$conexion = mysqli_connect($servidor,$usuario,$password,$db);

//verifivar la conexion
if (!$conexion){
    echo "conexion fallida";

}

?>