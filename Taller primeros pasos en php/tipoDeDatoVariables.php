<?php

//Fácil
$nombre = "Luna";
var_dump($nombre); //string

$apellido = "Lovegood";
var_dump($apellido); //string

$edad = 42;
var_dump($edad); //integer

$Ravenclaw = true;
var_dump($Ravenclaw); //bool

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($promedio); //float

$nombre_completo = $nombre . "" . $apellido;
var_dump($nombre_completo); //string

$presento_examen = (bool) 1;
var_dump($presento_examen); //bool

//Avanzado
$numero_preguntas = 5 + "5";
var_dump($numero_preguntas); //integer
echo "<br>";

$numero_respuestas = "5" + 5;
var_dump($numero_respuestas); //integer
echo "<br>";

$promedio_maximo = 
var_dump($promedio_maximo); //NULL
echo "<br>";

$numero_respuestas / 1.0;
var_dump($numero_respuestas); //(warning) integer
echo "<br>";

$nargles = 3 + "5 nargles";
var_dump($nargles); //(warning) integer
echo "<br>";

?>