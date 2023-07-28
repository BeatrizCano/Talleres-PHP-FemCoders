<?php

//crear un array con 10 números
$array_numeros = [12, 23, 34, 45, 56, 67, 78, 89, 90, 11];
var_dump($array_numeros);
echo "<br>";

//obtener el largo del array con "sizeof()"
//echo sizeof($array_numeros); //lo comento para que no salga duplicado el resultado

//obtener el largo del array con "count()"
echo count($array_numeros);
echo "<br>";

//agreagar un valor tipo string
array_push($array_numeros, "edad");
print_r($array_numeros);
echo "<br>";

//agregar dos elementos más al array
array_push($array_numeros, true, 3.23);
var_dump($array_numeros);
echo "<br>";

//crea un nuevo array y concatenalo con el anterior
$nombres = array("Teresa", "Carlos", "Yolanda", "Jaime", "Thor");
$nombres_edades = array_merge($array_numeros, $nombres);
var_dump($nombres_edades);
echo "<br>";

?>