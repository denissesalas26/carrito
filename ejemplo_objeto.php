<?php
$lista = array('alfredo', 'yul', 'eliana', 'willian', 'steward','rosy', 'mayte', 'zamira','jerson','bruno','denisse', 'raul','bruno', 'magaly', 'aron');
$contar = count($lista);
print_r($lista);

echo "<br>";
array_push($lista , "anibal");
/*
 $contar = count($lista);
 for ($i=0; $i <= $contar; $i++) {
    echo $lista[$i]. "<br>";
}
*/
/*
$lista2 = array("alfredo"=>40, "yul"=>39);
print_r($lista2);
*/

$lista2 = array(1=>"yut",4=>'laptop hp');

print_r($lista2);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

include('include/conexion.php');

$lista3 =array();
$consulta = "SELECT * FROM producto";
$ejecutar =mysqli_query($conexion, $consulta);
while ($r_ejecutar =mysqli_fetch_array($ejecutar)){
    $lista3[$r_ejecutar['id']] = $r_ejecutar['descripcion'];

}

print_r($lista3);
?>