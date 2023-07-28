<?php

//declarar dos variables tipo integer
$numero1 = 34;
var_dump($numero1);

$numero2 = 6;
var_dump($numero2);
echo "<br>";

//sumar ambas variables
$suma = $numero1 + $numero2;
var_dump($suma);
echo "<br>";

//declarar dos variables, de tipo integer, darle valor 1 y 0
$num0 = 0;
var_dump($num0);
echo "<br>";

$num1 = 1;
var_dump($num1);
echo "<br>";

//cambiar el tipo de dato a las funciones anteriores y conviertelo en tipo booleano
$num0 = 0;
$num0 = (bool)$num0;
var_dump($num0);
echo "<br>";

$num1 = 1;
$num1 = (bool)$num1;
var_dump($num1);
echo "<br>";

?>