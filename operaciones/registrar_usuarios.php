<?php
include("../include/conexion.php");


$dni = $_POST['dni'];
$ap_nom = $_POST['ap_nom'];
$email = $_POST['email'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$fecha_nac= $_POST['fecha_nac'];

echo $dni."<br>";
echo $ap_nom."<br>";
echo $email."<br>";
echo $telefono."<br>";
echo $direccion."<br>";
echo $fecha_nac."<br>";

$consulta = "INSERT INTO usuario(dni,apellidos_nombres,correo,telefono,
direccion,fecha_nacimiento,password,activo,reset_password,token_password) 
VALUES ('$dni','$ap_nom','$email','$telefono','$direccion','$fecha_nac','$dni',1,0,'')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar){
    echo "Registro Exitoso";
}else{
    echo"Error en el registro";
}





?>