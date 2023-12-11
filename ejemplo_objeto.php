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
$lista2 = array("alfredo"=>40, "yul"=>39);
print_r($lista2);
?>